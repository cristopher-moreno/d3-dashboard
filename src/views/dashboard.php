<?php
include("../models/classes/header.php");
require_once("../models/classes/engineData.php");

$engineControl = new EngineData();
$engineArray = $engineControl->getEngineData();
$engineJson = json_encode($engineArray);

$engineControl->exportEngineData($engineJson);


?>

<body>
    <p>D3 Dashboard</p>
</body>
<script src="engineChart.js"></script>
<script src="../models/jquery/jquery-3.4.1.js"></script>