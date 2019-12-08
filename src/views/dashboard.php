<?php
include("../models/classes/header.php");
require_once("../models/classes/engineData.php");

$engineControl = new EngineData();
$engineArray = $engineControl->getEngineData();
$engineJson = json_encode($engineArray);

$engineControl->exportEngineData($engineJson);


?>

<body>

    <!-- Create a div where the graph will take place -->
    <div id="dataviz"></div>

</body>

<script src="engineChart.js"></script>
