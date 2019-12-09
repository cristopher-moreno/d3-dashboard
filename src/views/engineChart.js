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

        let xTRIP_ID = [];
        let yFUEL_ECONOMY = [];
        let yCOST_RATE = [];

        //forEach: Best for object loop
        for (i in data) {
            xTRIP_ID.push(data[i].TRIP_ID);
            yFUEL_ECONOMY.push(data[i].FUEL_ECONOMY);
            yCOST_RATE.push(data[i].COST_RATE);
        }
        //console.log(xTRIP_ID, yFUEL_ECONOMY, yCOST_RATE);




    });
});