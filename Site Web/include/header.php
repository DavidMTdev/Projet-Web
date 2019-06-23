<?php require_once("include/function.php") ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">

    <?php if ($_SERVER["SCRIPT_NAME"] === "/projet-web/site web/home.php") : ?>
        <link rel="stylesheet" href="assets/css/navbar.css">
        <link rel="stylesheet" href="assets/css/home.css">
        <title>Accueil</title>
    <?php elseif ($_SERVER["SCRIPT_NAME"] === "/projet-web/site web/about.php") : ?>
        <link rel="stylesheet" href="assets/css/navbar.css">
        <link rel="stylesheet" href="assets/css/about.css">
        <link rel="stylesheet" href="assets/css/modifyMenu.css">
        <script src="assets/js/about.js" async></script>
        <script src="assets/js/modifyMenu.js" async></script>
        <script src="assets/js/modifyAbout.js" async></script>

        <title>A Propos</title>
    <?php elseif ($_SERVER["SCRIPT_NAME"] === "/projet-web/site web/choice.php") : ?>
        <link rel="stylesheet" href="assets/css/choice.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
        <title>Choix Du Porfolio</title>
    <?php elseif ($_SERVER["SCRIPT_NAME"] === "/projet-web/site web/project.php") : ?>
        <link rel="stylesheet" href="assets/css/navbar.css">
        <link rel="stylesheet" href="assets/css/project.css">
        <title>Projet</title>
    <?php elseif ($_SERVER["SCRIPT_NAME"] === "/projet-web/site web/project-infos.php") : ?>
        <link rel="stylesheet" href="assets/css/navbar.css">
        <link rel="stylesheet" href="assets/css/project-infos.css">
        <link rel="stylesheet" href="assets/css/modifyMenu.css">
        <script src="assets/js/modifyMenu.js" async></script>
        <script src="assets/js/modifyProjetInfo.js" async></script>
        <title>Information Du Projet</title>
    <?php elseif ($_SERVER["SCRIPT_NAME"] === "/projet-web/site web/comingsoon.php") : ?>
        <link rel="stylesheet" href="assets/css/navbar.css">
        <link rel="stylesheet" href="assets/css/comingsoon.css">
        <title>En Développement</title>
    <?php endif; ?>
    <script src="https://kit.fontawesome.com/25659af8cc.js" async></script>
</head>

<body>
    <?php if ($_SERVER["SCRIPT_NAME"] !== "/projet-web/site web/choice.php") : ?>
        <header>
            <?php require_once("include/nav.php") ?>
        </header>
    <?php endif; ?>

    <main>