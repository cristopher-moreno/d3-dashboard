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
    $engineData->setEngineData($_POST['trip_id'], $_POST['cost'], $_POST['volume'], $_POST['length'], $_POST['time'], $_POST['fuel_economy'], $_POST['cost_rate']);
    $_POST = array();
} ?>

<html lang="en">

<body>

</html>
<form action="./administration.php" method="POST">
    <div class="forms">
        <div class="forms">
            <div class="field">
                <label class="label">TRIP_ID</label>
                <div class="control">
                    <input class="input" type="text" placeholder="e.g 191028" name="trip_id">
                </div>
            </div>
        </div>

        <div class="forms">
            <div class="field">
                <label class="label">COST</label>
                <div class="control">
                    <input class="input" type="text" placeholder="e.g 17.68" name="cost">
                </div>
            </div>
        </div>

        <div class="forms">
            <div class="field">
                <label class="label">VOLUME</label>
                <div class="control">
                    <input class="input" type="text" placeholder="e.g 23.575" name="volume">
                </div>
            </div>
        </div>

        <div class="forms">
            <div class="field">
                <label class="label">LENGTH</label>
                <div class="control">
                    <input class="input" type="text" placeholder="e.g 362" name="length">
                </div>
            </div>
        </div>

        <div class="forms">
            <div class="field">
                <label class="label">TIME</label>
                <div class="control">
                    <input class="input" type="text" placeholder="e.g 16" name="time">
                </div>
            </div>
        </div>

        <div class="forms">
            <div class="field">
                <label class="label">FUEL_ECONOMY</label>
                <div class="control">
                    <input class="input" type="text" placeholder="e.g 15.355" name="fuel_economy">
                </div>
            </div>
        </div>

        <div class="forms">
            <div class="field">
                <label class="label">COST_RATE</label>
                <div class="control">
                    <input class="input" type="text" placeholder="e.g 1.11" name="cost_rate">
                </div>
            </div>
        </div>
        <div class="forms">
            <div class="control">
                <button class="button is-primary" name="submit">Submit</button>
            </div>
        </div>

        <div class="forms">
            <div class="control">
                <button class="button is-primary" name="submit">Initial Setup</button>
            </div>
        </div>
    </div>
</form>
</body>