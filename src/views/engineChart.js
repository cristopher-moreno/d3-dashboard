//Se espera que el DOM haya cargado
document.addEventListener("DOMContentLoaded", function (event) {

    //Se utiliza JQuery para lograr acceder al .json file
    $.getJSON("engineJson.json", function (json) {

        //Este será un arreglo con contenido objetos
        let arrEngineData = [];

        for (let i in json) {

            //DEBUG: Se imprime lo leído del .json
            console.log(json[i].TRIP_ID);
            console.log(json[i].FUEL_ECONOMY);
            console.log(json[i].COST_RATE);

            arrEngineData.push({
                TRIP_ID: json[i].TRIP_ID, //trip_id (e.g. => trip_id = 191115) 
                FUEL_ECONOMY: json[i].FUEL_ECONOMY // fuel economy (e.g. => FE = 15.97 km/L)
                //COST_RATE: json[i].COST_RATE // cost_rate ó tasa de costo (e.g. => CR = 2.50 $/día)
            });
        }

        // set the dimensions and margins of the graph
        var margin = {
            top: 10,
            right: 30,
            bottom: 30,
            left: 60
        };
        let width = 460 - margin.left - margin.right;
        let height = 400 - margin.top - margin.bottom;

        // append the svg object to the body of the page
        var svg = d3.select("#my_dataviz") //Select Element by html->id
            .append("svg")
            .attr("width", width + margin.left + margin.right)
            .attr("height", height + margin.top + margin.bottom)
            .append("g")
            .attr("transform",
                "translate(" + margin.left + "," + margin.top + ")");

        //Read the data
        d3.csv("https://raw.githubusercontent.com/holtzy/data_to_viz/master/Example_dataset/3_TwoNumOrdered_comma.csv",

            // When reading the csv, I must format variables:
            function (d) {
                return {
                    date: d3.timeParse("%Y-%m-%d")(d.date),
                    value: d.value
                }
            },

            // Now I can use this dataset:
            function (data) {

                // Add X axis --> it is a date format
                var x = d3.scaleTime()
                    .domain(d3.extent(data, function (d) {
                        return d.date;
                    }))
                    .range([0, width]);
                svg.append("g")
                    .attr("transform", "translate(0," + height + ")")
                    .call(d3.axisBottom(x));

                // Add Y axis
                var y = d3.scaleLinear()
                    .domain([0, d3.max(data, function (d) {
                        return +d.value;
                    })])
                    .range([height, 0]);
                svg.append("g")
                    .call(d3.axisLeft(y));

                // Add the line
                svg.append("path")
                    .datum(data)
                    .attr("fill", "none")
                    .attr("stroke", "steelblue")
                    .attr("stroke-width", 1.5)
                    .attr("d", d3.line()
                        .x(function (d) {
                            return x(d.date)
                        })
                        .y(function (d) {
                            return y(d.value)
                        })
                    )
            })
    });
});