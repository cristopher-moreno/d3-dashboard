//Se espera que el DOM haya cargado
document.addEventListener("DOMContentLoaded", function (event) {

    //Material Referencia: https://www.youtube.com/watch?v=nzshmMlOuwI 
    d3.json("./engineJson.json", function (error, data) {

        d3.select("p").style("color", "green");

        //end: D3
    });
    //end: DOM
});