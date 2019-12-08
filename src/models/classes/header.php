<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>d3 dashboard</title>

    <!--Se añaden: Recursos Externos-->
    <link rel="stylesheet" href="../../models/css/bulma.min.css">
    <link rel="stylesheet" href="../../models/css/styles.css">
    <script src="../../models/cdn/d3.js"></script>
    <script src="../../models/cdn/jquery-3.4.1.js"></script>


</head>

<body>
    <nav class="navbar box-shadow-y has-navbar-fixed-on-top" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
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
            <form action="../../views/administration.php">
                <div class="navbar-item">
                    <div class="buttons">
                        <input class="button is-dark is-focused" type="submit" value="Go to Administration" />
                    </div>
                </div>
            </form>
        </div>
        </div>
    </nav>
</body>