<?php require_once("include/header.php") ?>

<div class="project-presentation">

    <div class="supplement-image">
        <img src="images/whey.jpg" alt="">
    </div>

    <div class="supplement-principal">
        <div class="supplement-title">
            <h1><?= $projetUser['nom_projet'] ?></h1>
            <div class="border-principal"></div>
        </div>
    </div>

</div>

<div class="technology-used-project">
    <div class="technology-used">
        <h2>Technologies Utilisées</h2>
        <div class="border"></div>
        <div class="technology-used-logo">
            <img src="assets/img/HMTL logo.png" alt="">
            <img src="assets/img/CSS logo redi.png" alt="" id="css-img">
            <img src="assets/img/1280px-PHP-logo.svg.png" alt="" id="php-img">
        </div>
    </div>
</div>

<div class="project-description">

    <div class="description">
        <h2>Description</h2>
        <div class="border"></div>
        <p><?= $projetUser['description_projet'] ?></p>
    </div>
</div>



<div class="supplement-type">
    <div class="type">
        <h2>Screenshots</h2>
        <div class="border"></div>
        <div class="project-screenshot-container">
            <img src=<?= "upload/" . $_GET['id'] . "/projet/" . $_GET['projet'] . "/1.png" ?> alt="">
            <img src=<?= "upload/" . $_GET['id'] . "/projet/" . $_GET['projet'] . "/2.png" ?> alt="">
            <img src=<?= "upload/" . $_GET['id'] . "/projet/" . $_GET['projet'] . "/3.png" ?> alt="">
            <img src=<?= "upload/" . $_GET['id'] . "/projet/" . $_GET['projet'] . "/4.png" ?> alt="">
            <img src=<?= "upload/" . $_GET['id'] . "/projet/" . $_GET['projet'] . "/5.png" ?> alt="">
            <img src=<?= "upload/" . $_GET['id'] . "/projet/" . $_GET['projet'] . "/6.png" ?> alt="">
        </div>
    </div>
</div>

<?php require_once("include/footer.php") ?>