// ===============================
// Autor: Cristopher Moreno
// Fecha Creación: 20191208
// Fecha Modificación: 20191208
// ===============================
// Descripción:
// Este script se encarga de lo siguiente:
// - Recibe .json
// - Gererar gráfico lineal
//==================================

document.addEventListener("DOMContentLoaded", function (event) {

    d3.json("./engine.json").then(data => {

        let trip_id = [];
        let fuel_economy = [];
        let cost_rate = [];

        //forEach: Best for object loop
        for (i in data) {
            trip_id.push(data[i].TRIP_ID);
            fuel_economy.push(data[i].FUEL_ECONOMY);
            cost_rate.push(data[i].COST_RATE);
        }
        //console.log(trip_id, fuel_economy, cost_rate);

        let chartData = {
            labels: trip_id,
            datasets: [{
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
        }
    });
});