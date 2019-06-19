<?php require_once("include/header.php") ?>

<div class="index-container">

    <div class="index-project-title-container">
        <div class="index-project-title">
            <h2>Projets</h2>
            <div class="border"></div>
        </div>
    </div>

    <div class="index-project-container">

        <div class="project">
            <?php foreach ($allProjetUser as $key => $value) : ?>
                <div class="project-container">
                    <a href=<?= "project-infos.php?id=" . $_GET['id'] . "&projet=" . $value['id_projet'] ?>>
                        <div class="index-project-infos-container">

                            <div class="project-title-container">
                                <h3>Projet <?= $key ?></h3>
                                <div class="border"></div>
                            </div>
                            <div class="project-infos-container">
                                <img src=<?= "upload/" . $_GET['id'] . "/projet/" . $value['id_projet'] . "/1.png" ?> alt="">
                                <p><?= $value['nom_projet'] ?></p>
                            </div>

                        </div>
                    </a>
                </div>
            <?php endforeach; ?>



        </div>
    </div>
</div>

<?php require_once("include/footer.php") ?>