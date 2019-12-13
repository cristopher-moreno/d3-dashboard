<?php
// ===============================
// Autor: Cristopher Moreno
// Fecha Creación: 20191208
// Fecha Modificación: -
// ===============================
// Descripción:
// Este script se encarga de lo siguiente:
// - Instanciar un objeto de la clase engineData
// - Obtener información de la base de datos
// - Exportar en formato .json
//==================================

include("../models/classes/header.php");
require_once("../models/classes/engineData.php");
require_once("../models/classes/components.php");

$engineControl = new EngineData();
$engineArray = $engineControl->getEngineData();

$engineJson = json_encode($engineArray);
$engineControl->exportEngineData($engineJson);


?>

<body>
    <div class="chart-container "style="padding-top: 50px;">
        <canvas id="mycanvas"></canvas>
    </div>
</body>

<script src="engineChart.js"></script>