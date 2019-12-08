//Se espera que el DOM haya cargado
document.addEventListener("DOMContentLoaded", function (event) {

    //Se utiliza JQuery para lograr acceder al .json file
    $.getJSON("engineJson.json", function (json) {

        let arr = [];

        for (let i in json) {

            //DEBUG: Se imprime lo leído del .json
            console.log(json[i].TRIP_ID);
            console.log(json[i].FUEL_ECONOMY);
            console.log(json[i].COST_RATE);

            arr.push({
                TRIP_ID: json[i].TRIP_ID, //trip_id (e.g. => trip_id = 191115) 
                FUEL_ECONOMY: json[i].FUEL_ECONOMY, // fuel economy (e.g. => FE = 15.97 km/L)
                COST_RATE: json[i].COST_RATE // cost_rate ó tasa de costo (e.g. => CR = 2.50 $/día)
            });
        }













    });
});