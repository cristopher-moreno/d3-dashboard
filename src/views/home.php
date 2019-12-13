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

if (isset($_POST["submit"])) {
    if ($_POST["usuario"] != "") {
        $_SESSION['usuario'] = $_POST["usuario"];
        $_SERVER['PHP_SELF'];
    }
}
?>
<html lang="en">

<body>
    <div style="height:1000px; width:860px;">
        <?php

        $slide1 = "../models/imgs/slide1.svg";
        $slide2 = "../models/imgs/slide2.svg";
        $slide3 = "../models/imgs/slide3.svg";
        $slide4 = "../models/imgs/slide4.svg";

        getCarousel($slide1, $slide2, $slide3, $slide4);

        ?>
      
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" autocomplete="off">
            <div class="form-group" align="center" style="padding-top: 5px;">
                <?php

                setUser("usuario", "Usuario");
                submitForm("is-success", "Aceptar");

                ?>
            </div>
        </form>
    </div>
</body>

</html>