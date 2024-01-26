<?php
    include_once("helpers/url.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rafael Santos</title>

    <!--style-->
    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,700;1,300;1,700&display=swap" rel="stylesheet">

</head>
    <body>
        <header>
            <a href="<?= $BASE_URL ?>" id="logo">
                <img src="<?= $BASE_URL ?>/img/eu.png" alt="Rafael Santos">
            </a>
            <nav>
                <ul id="navbar">
                    <li><a href="<?= $BASE_URL ?>" class="nav-link"> HOME </a></li>
                    <li><a href="<?= $BASE_URL ?>" class="nav-link"> PROJECTS </a></li>
                    <li><a href="<?= $BASE_URL ?>" class="nav-link"> CONTACT </a></li>
                </ul>
            </nav>
        </header>
    