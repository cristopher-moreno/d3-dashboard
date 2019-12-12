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
        }

        let chartData = {
            labels: trip_id,
            datasets: [{
                    label: "Economía de Combustible",
                    data: fuel_economy,
                    lineTension: 0.1,
                    fill: false,
                    backgroundColor: 'rgba(50,205,50,0.30)',
                    borderColor: 'rgb(34,139,34)',
                    borderWidth: 1
                },
                {
                    label: "Tasa de Costo",
                    data: cost_rate,
                    lineTension: 0.1,
                    fill: false,
                    backgroundColor: 'rgba(50,205,50,0.30)',
                    borderColor: 'rgb(34,139,34)',
                    borderWidth: 1
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