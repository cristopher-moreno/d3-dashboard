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


if (isset($_POST["submit"])) {
    $engineData = new EngineData();
} ?>

<html lang="en">

<body>

</html>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
    <div class="form-group" style="padding-top: 30px;">
        <?php
        setField("tripId", "Trip");
        setField("time", "Duración");
        setField("fuelEconomy", "Economía Combustible");
        setField("costRate", "Tasa de Costo");
        submitForm("is-success", "Guardar");
        ?>
    </div>
</form>
</body>