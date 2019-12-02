<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EPIC</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.2/dist/Chart.min.js"></script>
</head>

<body>
    <nav class="navbar box-shadow-y has-navbar-fixed-on-top" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="./home.php">
                <img src="./img/logo.png">
            </a>
        </div>
        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item" href="./home.php">
                    Home
                </a>
                <a class="navbar-item" href="./dashboard.php">
                    Dashboard
                </a>
            </div>
        </div>
        <div class="navbar-end">
            <form action="./administration.php">
                <div class="navbar-item">
                    <div class="buttons">
                        <input class="button is-dark is-focused" type="submit" value="Go to Administration" />
                    </div>
                </div>
            </form>
        </div>
        </div>
    </nav>