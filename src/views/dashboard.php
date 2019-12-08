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
    <div id="my_dataviz"></div>
</body>

<script src="engineChart.js"></script>
<script src="../models/cdn/jquery-3.4.1.js"></script>
<script src="../models/cdn/d3.js"></script>