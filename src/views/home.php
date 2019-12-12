<?php
// ===============================
// Autor: Cristopher Moreno
// Fecha Creación: 20191208
// Fecha Modificación: -
// ===============================
// Descripción:
// Este script se encarga de lo siguiente:
// - Página de bienvenida al proyecto
// PHP-SELF: http://form.guide/php-form/php-form-action-self.html 
//==================================
require_once("../models/classes/components.php");
include("../models/classes/header.php");

//Ternary Operator in PH:
(isset($_POST["submit"]) and  $_POST["submit"] != "") ? ($_SESSION['usuario'] = $_POST["usuario"]) : ($_SESSION['usuario'] = "Invitado");
?>
<html lang="en">

<body>
    <div id="main_content">
        <div>
            <img src="../models/imgs/hero-preloader-chart.gif">
        </div>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" autocomplete="off">
            <div class="form-group" style="padding-top: 5px;">
                <?php
                setUser("usuario", "Usuario");
                submitForm("is-success", "Aceptar");;
                ?>
            </div>
        </form>
    </div>

</body>

</html>