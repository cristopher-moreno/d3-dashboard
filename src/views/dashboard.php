<?php
include("../models/classes/header.php");
require_once("../models/classes/engineData.php");

$engineControl = new EngineData();
$engineArray = $engineControl->getEngineData();

$engineJson = json_encode($engineArray);
$engineControl->exportEngineData($engineJson);


?>

<body>
    <div class="chart-container">
        <canvas id="mycanvas"></canvas>
    </div>
</body>

<script src="engineChart.js"></script>