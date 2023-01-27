<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pirates des caraibes</title>
    <link rel="stylesheet" href="http://<?= $_SERVER['HTTP_HOST']; ?>/public/style/main.css">
</head>
<?php $path = $_SERVER['REQUEST_URI']; ?>
<body class="<?= str_replace("/", "", $path); ?>">
<nav class="header">
    <div class="header_logo">
        <a href="/">
            <h1>Pirates des caraibes</h1>
        </a>
    </div>
    <div class="header_menu">
        <ul class="menu">
            <?php
            echo '<li class="nav-item"><a href="/films" class="nav-link">Liste Films</a></li>';
            echo '<li class="nav-item"><a href="/acteurs" class="nav-link">Liste Acteurs</a></li>';
            echo '<li class="nav-item"><a href="/galerie" class="nav-link">Galerie</a></li>';
            if ($_SESSION) {
                echo '<li class="nav-item"><a href="/logout" class="nav-link">Logout</a></li>';
            }
            else
             echo'<li class="nav-item"><a href="/login" class="nav-link">Login</a></li>';
            ?>
        </ul>
    </div>
</nav>