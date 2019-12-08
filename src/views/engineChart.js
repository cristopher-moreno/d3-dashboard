//Se espera que el DOM haya cargado
document.addEventListener("DOMContentLoaded", function (event) {

    //Se utiliza JQuery para lograr acceder al .json file
    $.getJSON("engineJson.json", function (json) {

        d3.select("body")
            .append("h3");

        d3.select("body")
            .selectAll("div")
            .data(json)
            .enter()
            .append("div")
            .style("width", function (d) {
                return d.amount * 40 + "px";
            })
            .style("height", "15px");




        //End
    })
});