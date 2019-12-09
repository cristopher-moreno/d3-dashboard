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

        rect.data(dataArray)
            .enter().append("rect")
            .attr("width", 24)
            .attr("fill", "LimeGreen")
            .attr("x", function (d, i) { //point in space p(x,y) => p(100,15) //Cartessian Plane in computers are upside down.
                return i * 25;
            })
            .attr("y", function (d, i) {
                return 100 - (d * 2);
            })
            .attr("height", function (d) {
                return d * 2;
            })

        //end: D3
    });
    //end: DOM
});