<?php
include("../models/classes/header.php");
require_once("../models/classes/engineData.php");

$engineControl = new EngineData();
$engineArray = $engineControl->getEngineData();

$engineJson = json_encode($engineArray);
$engineControl->exportEngineData($engineJson);


?>

<body>


    <div class="canva" style="background-color:whitesmoke">
        <svg>
        </svg>
    </div>
</body>

<script src="engineChart.js"></script>