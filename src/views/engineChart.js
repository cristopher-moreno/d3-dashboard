//Se espera que el DOM haya cargado
document.addEventListener("DOMContentLoaded", function (event) {

    //Material Referencia: https://www.youtube.com/watch?v=nzshmMlOuwI 
    d3.json("./engineJson.json", function (error, data) {

        // let dataArray = [];

        // //for each es lo mejor para recorrer objetos:
        // for (let i in data) {
        //     dataArray.push({
        //         TRIP_ID: data[i].TRIP_ID,
        //         FUEL_ECONOMY: data[i].FUEL_ECONOMY
        //     });
        // }

        const canvas = d3.select(".canva");
        let dataArray = [4, 15, 34];

        const svg = canvas.select("svg");
        const rect = svg.selectAll("rect");

        rect.attr("width", 24)
            .data(dataArray)
            .attr("fill", "LimeGreen")
            .attr("height", function (d) {
                return d*2;
            })
            .attr("x", function (d, i) {
                return i * 25;
            })

        //end: D3
    });
    //end: DOM
});