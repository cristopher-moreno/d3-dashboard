<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>d3 dashboard</title>

    <!--Se añaden: Librerías y Recursos Externos-->
    <link rel="stylesheet" href="../../models/css/bulma.min.css">
    <link rel="stylesheet" href="../../models/css/styles.css">
    <script src="../../models/cdn/d3.js"></script>
    <script src="../../models/cdn/jquery-3.4.1.js"></script>
    <script src="../../models/cdn/Chart.min.js"></script>
    <script src="../../models/cdn/bootstrap.bundle.min.js"></script>



</head>

<body>
    <nav class="navbar box-shadow-y is-fixed-top" role="navigation" aria-label="main navigation">
        <div class="navbar-brand ">
            <a class="navbar-item" href="../../views/home.php">
                <img src="../../models/imgs/logo.png">
            </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item" href="../../views/home.php">
                    Home
                </a>
                <a class="navbar-item" href="../../views/dashboard.php">
                    Dashboard
                </a>
            </div>
        </div>

        <div class="navbar-end">
            <div class="navbar-item">
                <?php

                //! Variables de Sesiones

                if (isset($_SESSION["usuario"])) {
                    echo '<h6 class="subtitle is-6">Bienvenido, ' . $_SESSION["usuario"] . '</h6>';
                } else {
                    echo '<h6 class="subtitle is-6">Bienvenido, Invitado</h6>';
                }

                ?>
            </div>
        </div>

        <div class="navbar-end">
            <form action="../../views/administration.php">
                <div class="navbar-item">
                    <div class="buttons">
                        <input class="button is-dark is-focused" type="submit" value="Ir a Administración" />
                    </div>
                </div>
            </form>
        </div>
        </div>
    </nav>
</body>

<body>
    <div style="padding-top: 60px;">
</body>