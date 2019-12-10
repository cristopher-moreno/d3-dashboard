<?php
// ===============================
// Autor: Cristopher Moreno
// Fecha Creación: 20191208
// Fecha Modificación: -
// ===============================
// Descripción:
// Este script se encarga de lo siguiente:
// - Crear CRUD del proyecto
//==================================

include("../models/classes/header.php");
require_once("../models/classes/engineData.php");
require_once("../models/classes/components.php");


if (isset($_POST["Guardar"])) {


    $engineData = new EngineData();
    $_POST = array();
} ?>

<html lang="en">

<body>

</html>
<form action="./administration.php" method="POST">
    <div class="form-group" style="padding-top: 30px;">
        <?php
        setField("tripId");
        setField("checkpointA");
        setField("checkpointB");
        setField("dateIni");
        setField("dateEnd");
        setField("cost");
        setField("volume");
        setField("length");
        setField("time");
        setField("fuelEconomy");
        setField("costRate");
        submitForm("is-success", "Guardar");
        ?>
    </div>
</form>
</body>