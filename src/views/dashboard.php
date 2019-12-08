<?php
include("../models/classes/header.php");
require_once("../models/classes/engineData.php");

$engineData = new EngineData();
$engineArray = $engineData->getEngineData();
$json = json_encode($engineArray);

print_r($json);
?>

<body>
    <p>D3 Dashboard</p>
</body>