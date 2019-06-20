<?php require_once("include/header.php") ?>

<div class="about-title">
    <div class="supplement-principal display-flex-center">
        <div class="supplement-title">
            <h1>A Propos de moi</h1>
            <div class="border-principal"></div>
        </div>
    </div>
</div>

<div class="about-main-info display-flex-center">
    <div class="container presentation-principal">
        <div class="js-edit">
            <div class="image-pro display-flex-center">
                <img src=<?= "upload/" . $_GET['id'] . "/" . $user['image_uti'] ?> alt="">

            </div>
            <?php if (isset($_SESSION["connectedAdmin"]) && $_SESSION["connectedAdmin"]) : ?>
                <div class="js-edit-button js-image">
                    <img src="assets/icon/icons8_Edit_Property_48px.png" alt="">
                </div>
            <?php endif; ?>
        </div>
        <div class="js-edit">
            <div class="info-pro display-flex-center">
                <div class="info-pro-container">
                    <div class="name-surname">
                        <h3><?= $user['PRENOM_UTI'] ?> </h3>
                        <h3 id="surname"><?= $user['NOM_UTI'] ?></h3>
                    </div>
                    <h4><?= $user['age_uti'] ?> ans</h4>
                    <h4>Etudiant en informatique</h4>
                </div>
            </div>
            <?php if (isset($_SESSION["connectedAdmin"]) && $_SESSION["connectedAdmin"]) : ?>
                <div class="js-edit-button js-info-pro">
                    <img src="assets/icon/icons8_Edit_Property_48px.png" alt="">
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<div class="about-social-info display-flex-center">
    <div class="container social">
        <a href="#"><img src="assets/img/facebook logo.png" alt=""></a>
        <a href="#"><img src="assets/img/twitter logo.png" alt=""></a>
        <a href="#"><img src="assets/img/google plus logo.png" alt=""></a>
        <a href="#"><img src="assets/img/linkedin logo.png" alt=""></a>
    </div>
</div>

<div class="about-full-info display-flex-center">
    <div class="container full-info">
        <div class="presentation-pro">
            <div class="js-edit">
                <h1>Qui suis-je</h1>
                <p><?= $user['description_uti'] ?></p>
                <?php if (isset($_SESSION["connectedAdmin"]) && $_SESSION["connectedAdmin"]) : ?>
                    <div class="js-edit-button js-presentation">
                        <img src="assets/icon/icons8_Edit_Property_48px.png" alt="">
                    </div>
                <?php endif; ?>
            </div>

        </div>
        <div class="school-career">
            <div class="js-edit">
                <h1>Parcours Scolaire</h1>
                <ol>
                    <?php foreach ($schoolCareer as $key => $value) : ?>
                        <li>
                            <div>
                                <p><?= $value['NOM_ECOLE'] ?></p>
                                <p><?= $value['DATE_DEBUT_SCOLARITE'] . " - " . $value['DATE_FIN_SCOLARITE'] ?></p>
                                <p><?= $value['DIPLOME'] ?></p>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ol>
                <?php if (isset($_SESSION["connectedAdmin"]) && $_SESSION["connectedAdmin"]) : ?>
                    <div class="js-edit-button js-school-career">
                        <img src="assets/icon/icons8_Edit_Property_48px.png" alt="">
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <div class="experience-pro">
            <div class="js-edit">
                <h1>Expériences Professionnelles</h1>
                <ol>
                    <?php foreach ($experiencePro as $key => $value) : ?>
                        <li>
                            <div>
                                <h2><?= $value['nom_entreprise'] ?></h2>
                                <h4><?= $value['date_debut_exp'] . " - " . $value['date_fin_exp'] ?></h4>
                                <h4><?= $value['poste_exp'] ?></h4>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ol>
                <?php if (isset($_SESSION["connectedAdmin"]) && $_SESSION["connectedAdmin"]) : ?>
                    <div class="js-edit-button js-experience">
                        <img src="assets/icon/icons8_Edit_Property_48px.png" alt="">
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <div class="language-skill">
            <div class="js-edit">
                <h1>Compétences Linguistiques</h1>
                <?php foreach ($languageSkill as $key => $value) : ?>
                    <div class="skillbox">
                        <p class="comp"><?= $value['NOM_LANG'] ?></p>
                        <p class="comp"><?= $value['NIVEAU_LANG'] ?>%</p>
                        <div class="skill">
                            <div class="skill_level_fr" style="width: <?= $value['NIVEAU_LANG'] ?>%; height: 6px; background: #3f51b5;"></div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <?php if (isset($_SESSION["connectedAdmin"]) && $_SESSION["connectedAdmin"]) : ?>
                    <div class="js-edit-button js-language-skill">
                        <img src="assets/icon/icons8_Edit_Property_48px.png" alt="">
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="technical-skill">
            <div class="js-edit">
                <h1>compétences techniques</h1>
                <?php foreach ($technicalSkill  as $key => $value) : ?>
                    <div class="skillbox">
                        <p class="comp"><img src=<?= "upload/" . $_GET['id'] . "/technical_skill" . "/" . $value['image_cles'] ?>> <?= $value['NOM_CLES'] ?></p>
                        <p class="comp"><?= $value['NIVEAU_CLES'] ?>%</p>
                        <div class="skill">
                            <div class="skill_level_python" style="width: <?= $value['NIVEAU_CLES'] ?>%; height: 6px; background: #ffc107;"></div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <?php if (isset($_SESSION["connectedAdmin"]) && $_SESSION["connectedAdmin"]) : ?>
                    <div class="js-edit-button js-technical-skill">
                        <img src="assets/icon/icons8_Edit_Property_48px.png" alt="">
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <div class="leisure">
            <div class="js-edit">
                <h1>Mes Loisirs</h1>
                <?php foreach ($hobby  as $key => $value) : ?>
                    <p><?= $value['loisir'] ?></p>
                <?php endforeach; ?>
                <?php if (isset($_SESSION["connectedAdmin"]) && $_SESSION["connectedAdmin"]) : ?>
                    <div class="js-edit-button js-leisure">
                        <img src="assets/icon/icons8_Edit_Property_48px.png" alt="">
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="contact">
            <div class="js-edit">
                <h1>Contact</h1>
                <p><?= $user['ADRESSE_UTI'] ?></p>
                <p><?= $user['VILLE_UTI'] . " " . $user['CODEPOSTAL_UTI'] . " " . $user['PAYS_UTI'] ?></p>
                <p><?= $user['MAIL_UTI'] ?></p>
                <p><?= $user['TEL_UTI'] ?></p>
                <?php if (isset($_SESSION["connectedAdmin"]) && $_SESSION["connectedAdmin"]) : ?>
                    <div class="js-edit-button js-contact">
                        <img src="assets/icon/icons8_Edit_Property_48px.png" alt="">
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <!-- <div class="download">
            <div class="js-edit">
                <h3>Téléchargement</h3>

                <form action="" method="post">
                    <button type="submit">Télécharger</button>
                </form>
                <div class="js-edit-button js-download">
                    <img src="assets/icon/icons8_Edit_Property_48px.png" alt="">
                </div>
            </div>
        </div> -->
    </div>
</div>

<script>
    var idSchoolCareer = [];
    var keySchool = [];

    <?php foreach ($schoolCareer as $key => $value) : ?>
        idSchoolCareer.push(<?= $value['ID_SCOLAIRE'] ?>);
        keySchool.push(<?= $key ?>);
    <?php endforeach; ?>

    var idExperience = [];
    var keyExperience = [];

    <?php foreach ($experiencePro as $key => $value) : ?>
        idExperience.push(<?= $value['id_exp'] ?>);
        keyExperience.push(<?= $key ?>);
    <?php endforeach; ?>

    var idLanguageSkill = [];
    var keyLanguageSkill = [];

    <?php foreach ($languageSkill as $key => $value) : ?>
        idLanguageSkill.push(<?= $value['id_lang'] ?>);
        keyLanguageSkill.push(<?= $key ?>);
    <?php endforeach; ?>

    var idTechnicalSkill = [];
    var keyTechnicalSkill = [];

    <?php foreach ($technicalSkill as $key => $value) : ?>
        idTechnicalSkill.push(<?= $value['id_comp_cles'] ?>);
        keyTechnicalSkill.push(<?= $key ?>);
    <?php endforeach; ?>

    var idHobby = [];
    var keyHobby = [];

    <?php foreach ($hobby as $key => $value) : ?>
        idHobby.push(<?= $value['id_loisir'] ?>);
        keyHobby.push(<?= $key ?>);
    <?php endforeach; ?>
</script>

<?php require_once("include/footer.php") ?>