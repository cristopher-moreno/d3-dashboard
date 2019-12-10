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

if (isset($_POST["submit"])) {
    $engineData = new EngineData();
    $_POST = array();
} ?>

<html lang="en">

<body>

</html>
<form action="./administration.php" method="POST">
    <div class="form-group" style="padding-top: 30px;">
        <label>
            Name
        </label>
        <input type="text" name="name" class="form-control" value="Enter a Name">
    </div>
</form>
</body>