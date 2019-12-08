//Se espera que el DOM haya cargado
document.addEventListener("DOMContentLoaded", function (event) {
    //Se utiliza JQuery para lograr acceder al .json file #REFERENCE: https://www.youtube.com/watch?v=2S1AbEWX85o
    //? Why? Es posible que sea uno de los formatos de data externa que se reciban en producción.

    d3.json("./engineJson.json", function (error, data) {

        //console.log(data);
        let e = document.getElementById("dataviz");
        console.log(e);

        let canvas = d3.select("#dataviz").append("svg").attr("width", 500).attr("height", 500);

        canvas.selectAll("rect").data(data).enter().append("rect").attr("width", function (d) {
                console.log(d.FUEL_ECONOMY);
                return d.FUEL_ECONOMY;
            }).attr("heigth", 25)
            .attr("y", function (d) {
                console.log(d.FUEL_ECONOMY);
                return d.TRIP_ID;
            }).attr("fill", "green");

        //end: D3
    });
    //end: DOM
});