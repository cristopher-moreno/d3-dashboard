// ===============================
// Autor: Cristopher Moreno
// Fecha Creación: 20191208
// Fecha Modificación: 20191209
// ===============================
// Descripción:
// Este script se encarga de lo siguiente:
// - Recibe .json
// - Gererar gráfico lineal (Chart.js / D3.js)
// - Punto Pronóstico mediante Regresión Lineal Simple (y = a + bx)
// - Material de Referencia: https://medium.com/javascript-in-plain-english/exploring-chart-js-e3ba70b07aa4
//==================================

document.addEventListener("DOMContentLoaded", function(event) {
    d3.json("./engine.json").then(data => {
        let trip_id = [];
        let duration = [];
        let fuel_economy = [];
        let cost_rate = [];

        //forEach: Best for object loop
        for (i in data) {
            trip_id.push(parseInt(data[i].TRIP_ID));
            duration.push(parseInt(data[i].TIME));
            fuel_economy.push(parseFloat(data[i].FUEL_ECONOMY));
            cost_rate.push(parseFloat(data[i].COST_RATE));
        }

        regresionLineal(fuel_economy, duration);

        function regresionLineal(fe, dur) {
            //Ecuación de la recta: y = a + bx
            let n = 0;

            let xsum = 0;
            let ysum = 0;
            let xysum = 0;
            let x2sum = 0;
            let xprom = 0;
            let yprom = 0;

            let b = 0;
            let a = 0;
            let xnueva = 0;
            let y = 0;

            let tendencia = 0;
            let precision = 1000; //? Para redondeo a 3 posiciones decimales usar 1000

            n = fe.length;

            //! Calculando Sumatorias: (acumuladores)
            for (let i = 0; i < n; i++) {
                xsum = xsum + dur[i];
                ysum = ysum + fe[i];
                xysum = xysum + fe[i] * dur[i];
                x2sum = x2sum + dur[i] * dur[i];
            }

            xprom = xsum / n;
            yprom = ysum / n;

            //! xnueva: Duración (en días) redondeada hacia menor entero próximo.
            xnueva = Math.floor(xprom);

            b = (xysum - n * xprom * yprom) / (x2sum - n * xprom * xprom);
            a = yprom - b * xnueva;

            y = a + b * xnueva;

            console.log("xsum:", xsum);
            console.log("ysum:", ysum);
            console.log("xysum:", xysum);
            console.log("x2sum:", x2sum);
            console.log("n:", n);
            console.log("xprom:", xprom);
            console.log("yprom:", yprom);
            console.log("xnueva:", xnueva);
            console.log("b:", b);
            console.log("a:", a);
            console.log("y:", y);

            let label = "en " + xnueva + " días";
            trip_id[0] = "";
            trip_id.push(label);
            fuel_economy.push(y);

            tendencia = ((Math.round((((fuel_economy[n]) - (fuel_economy[n - 1])) / (fuel_economy[n - 1])) * precision)) / precision);
            console.log("Tendencia: ", tendencia, "%");

        }

        let chartData = {
            labels: trip_id,
            datasets: [{
                    label: "Economía de Combustible",
                    data: fuel_economy,
                    lineTension: 0.1,
                    fill: false,
                    borderColor: 'rgba( 93, 173, 226 , 1)',
                    //backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderWidth: 3
                },
                {
                    label: "Tasa de Costo",
                    data: cost_rate,
                    lineTension: 0.1,
                    fill: true,
                    borderColor: 'rgba( 35, 155, 86, 1)',
                    backgroundColor: 'rgba( 35, 155, 86, 0.10)',
                    borderWidth: 2
                }
            ]
        };

        //Sentencia AJAX
        let ctx = $("#mycanvas");
        console.log(ctx);

        let LineGraph = new Chart(ctx, {
            type: "line",
            data: chartData

        });
    });
});