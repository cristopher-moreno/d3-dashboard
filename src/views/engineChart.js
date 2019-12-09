// ===============================
// Autor: Cristopher Moreno
// Fecha Creación: 20191208
// Fecha Modificación: 20191209
// ===============================
// Descripción:
// Este script se encarga de lo siguiente:
// - Recibe .json
// - Gererar gráfico lineal + Punto Pronóstico mediante Regresión Lineal Simple (Chart.js / D3.js)
//==================================

document.addEventListener("DOMContentLoaded", function(event) {
  d3.json("./engine.json").then(data => {
    let trip_id = [];
    let duration = [];
    let fuel_economy = [];
    let cost_rate = [];

    //forEach: Best for object loop
    for (i in data) {
      trip_id.push(data[i].TRIP_ID);
      duration.push(data[i].TIME);
      fuel_economy.push(data[i].FUEL_ECONOMY);
      cost_rate.push(data[i].COST_RATE);
    }

    regresionLineal(fuel_economy, duration);

    function regresionLineal(fe, dur) {
      //Ecuación de la recta: y = a+bx
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

      //! Calculando Sumatorias:
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

    //console.log(trip_id, fuel_economy, cost_rate);

    let chartData = {
      labels: trip_id,
      datasets: [
        {
          label: "Economía de Combustible",
          fill: false,
          lineTension: 0.1,
          data: fuel_economy
        },
        {
          label: "Tasa de Costo",
          fill: false,
          lineTension: 0.1,
          data: cost_rate
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
