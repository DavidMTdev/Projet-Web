<?php require_once("include/function.php") ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/navbar.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">

    <?php if ($_SERVER["SCRIPT_NAME"] === "/site web/home.php") : ?>
        <link rel="stylesheet" href="assets/css/home.css">
    <?php elseif ($_SERVER["SCRIPT_NAME"] === "/site web/about.php") : ?>
        <link rel="stylesheet" href="assets/css/about.css">
        <link rel="stylesheet" href="assets/css/modifyMenu.css">

        <script src="assets/js/about.js" async></script>
        <script src="assets/js/modifyMenu.js" async></script>
    <?php endif; ?>


    <script src="https://kit.fontawesome.com/25659af8cc.js" async></script>
</head>

<body>
    <header>
        <?php require_once("include/nav.php") ?>
    </header>
    <main>