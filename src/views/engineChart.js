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

        var svg;

        //This is the accessor function we talked about above
        var lineFunction = d3.line()
            .x(function (d) {
                //console.log(d.TRIP_ID);
                return d.TRIP_ID;
            })
            .y(function (d) {
                //console.log(d.FUEL_ECONOMY);
                return d.FUEL_ECONOMY;
            })
            .curve(d3.curveLinear); // Use for clarity, omit for brevity.

        //The SVG Container
        var svgContainer = d3.select("body").append("svg:svg")
            .attr("width", 200)
            .attr("height", 200);

        //The line SVG Path we draw
        var lineGraph = svgContainer.append("path")
            .attr("d", lineFunction(data))
            .attr("stroke", "blue")
            .attr("stroke-width", 2)
            .attr("fill", "none");
    });
});