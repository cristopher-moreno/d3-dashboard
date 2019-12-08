document.addEventListener("DOMContentLoaded", function (event) {
    $.getJSON("engineJson.json", function (json) {
        console.log(json);
    });

});