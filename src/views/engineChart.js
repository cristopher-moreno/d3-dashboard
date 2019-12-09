// ===============================
// Autor: Cristopher Moreno
// Fecha Creación: 20191208
// Fecha Modificación: 20191208
// ===============================
// Descripción:
// Este script se encarga de lo siguiente:
// - Recibe .json
// - Gererar gráfico lineal (Chart.js / D3.js)
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
      //EQ Recta: y = ax+b
      let m = 10; //!Número de muestras a considerar
      let n = 0;

      let xsum = 0;
      let ysum = 0;
      let xysum = 0;
      let x2sum = 0;
      let xprom = 0;
      let yprom = 0;

      let b = 0;
      let a = 0;
      let y = 0;

      n = fe.length - m;

      //! Calculando Sumatorias: Solo tomar en consideración las últimas 10 mediciones;
      for (let i = n; i < fe.length; i++) {
        xsum = xsum + fe[i];
        ysum = ysum + dur[i];
        xysum = xysum + fe[i] * dur[i];
        x2sum = x2sum + fe[i] * fe[i];
      }

      xprom = xsum / n;
      yprom = ysum / n;

      b = (xysum - n * xprom * yprom) / (x2sum - n * (xprom * xprom));

      a = yprom - b * xprom;

      console.log(b, a);

      //Pronóstico para los siguientes  10 días:
      //! y = a + bx
      //! y = a + b(10)

      y = a + b * 10;

      trip_id.push("Pronóstico");
      fuel_economy.push(y);
    }

    //console.log(trip_id, fuel_economy, cost_rate);

    let chartData = {
      labels: trip_id,
      datasets: [
        {
          label: "Fuel Economy",
          fill: false,
          lineTension: 0.1,
          data: fuel_economy
        },
        {
          label: "Cost Rate",
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
