//Se espera que el DOM haya cargado
document.addEventListener("DOMContentLoaded", function(event) {
  //Material Referencia: https://www.youtube.com/watch?v=nzshmMlOuwI
  //data: es el objeto que representa a 'engineJson.json'

  d3.json("./engineJson.json", function(error, data) {
    //Seleccionar elemento por clase: '.canvas'
    const canvas = d3.select(".canva");

    //Añadir elemento: 'svg'
    const svg = canvas
      .append("svg")
      .attr("width", 600)
      .attr("height", 600);

    //Seleccionar elementos virtuales (creados después de function '.enter().append("rect")')
    const rect = svg.selectAll("rect");

    //Establecer propiedades de cada objeto virtual creado
    rect
      .data(data)
      .enter()
      .append("rect")
      .attr("width", 24)
      .attr("fill", "#52be80")
      .attr("x", function(d, i) {
        //point in space p(x,y) => p(100,15) //Cartessian Plane in computers are upside down.
        return i * 25;
      })
      .attr("y", function(d, i) {
        console.log(d.FUEL_ECONOMY);
        return 150 - d.FUEL_ECONOMY;
      })
      .attr("height", d => d.FUEL_ECONOMY); //arrow-function: work only in one line block

    //end: D3
  });
  //end: DOM
});
