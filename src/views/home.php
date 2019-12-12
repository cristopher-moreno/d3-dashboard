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

include("../models/classes/header.php");
require_once("../models/classes/components.php");

if (isset($_POST["submit"]) and $_POST["usuario"] != "") {
    $_SESSION['usuario'] = $_POST['usuario'];
}
?>
<html lang="en">

<body>
    <div id="main_content">
        <div>
            <img src="../models/imgs/hero-preloader-chart.gif">
        </div>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="form-group" style="padding-top: 5px;">
                <?php
                setField("usuario", "Usuario");
                submitForm("is-success", "Ir");
                ?>
            </div>
        </form>
    </div>

</body>

</html>