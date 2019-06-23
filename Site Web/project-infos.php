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
        <div class="js-edit">
            <h2>Technologies Utilisées</h2>
            <div class="border"></div>
            <div class="technology-used-logo">
                <img src=<?= "upload/" . $_GET['id'] . "/projet/" . $_GET['projet'] . "/technology/1.png" ?> alt="">
                <img src=<?= "upload/" . $_GET['id'] . "/projet/" . $_GET['projet'] . "/technology/2.png" ?> alt="">
                <img src=<?= "upload/" . $_GET['id'] . "/projet/" . $_GET['projet'] . "/technology/3.png" ?> alt="">
            </div>
            <?php if (isset($_SESSION["connectedAdmin"]) && $_SESSION["connectedAdmin"]) : ?>
                <div class="js-edit-button js-technology">
                    <img src="assets/icon/icons8_Edit_Property_48px.png" alt="">
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<div class="project-description">

    <div class="description">
        <div class="js-edit">
            <h2>Description</h2>
            <div class="border"></div>
            <p><?= $projetUser['description_projet'] ?></p>
            <?php if (isset($_SESSION["connectedAdmin"]) && $_SESSION["connectedAdmin"]) : ?>
                <div class="js-edit-button js-description">
                    <img src="assets/icon/icons8_Edit_Property_48px.png" alt="">
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>



<div class="supplement-type">
    <div class="type">
        <div class="js-edit">
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
            <?php if (isset($_SESSION["connectedAdmin"]) && $_SESSION["connectedAdmin"]) : ?>
                <div class="js-edit-button js-screenshot">
                    <img src="assets/icon/icons8_Edit_Property_48px.png" alt="">
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php require_once("include/footer.php") ?>