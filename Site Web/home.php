<?php require_once("include/header.php") ?>

<section id="header" class="main-header">
    <div class="title">
        <h1><?= $user['NOM_UTI'] . ' ' . $user['PRENOM_UTI'] ?></h1>
    </div>
    <div class="info">
        <p>Je suis un étudiant en informatique</p>
    </div>
    <div class="img">
        <a href="#info"><i class="fas fa-angle-double-down"></i></a>
    </div>
</section>
<section id="info" class="main-info">
    <div class="grid column-1">
        <div class="about">
            <a href=<?= "about.php?id=" . $_GET['id'] ?>>
                <div class="item">
                    <div class="icon">
                        <img src="assets/icon/icons8-carte-contact-64.png">
                    </div>
                    <h2>A propos</h2>
                    <p>Apprenez à me connaître et plus encore.</p>
                </div>
            </a>
        </div>
    </div>
    <div class="grid column-3">
    <div class="project">
            <a href=<?= "project.php?id=" . $_GET['id'] ?>>
                <div class="item">
                    <div class="icon">
                        <img src="assets/icon/icons8-projet-96.png">
                    </div>
                    <h2>Projet</h2>
                    <p>Découvrez les projets que j'ai réalisé.</p>
                </div>
            </a>
        </div>
        <div class="company">
            <a href="#">
                <div class="item">
                    <div class="icon">
                        <img src="assets/icon/icons8-société-64.png">
                    </div>
                    <h2>Entreprise</h2>
                    <p>Découvrez les entreprises dans lesquelles j'ai travaillé.</p>
                </div>
            </a>
        </div>
        
        <div class="article">
            <a href="#">
                <div class="item">
                    <div class="icon">
                        <img src="assets/icon/icons8-nouvelles-64.png">
                    </div>
                    <h2>article</h2>
                    <p>Suivez mon aventure dans les entreprises</p>
                </div>
            </a>
        </div>
    </div>
</section>
<section id="contact" class="main-contact">
    <div class="grid column-2">
        <div class="mail-contact">
            <div class="contact-title-container">
                <div class="contact-title">
                    <h3>Contactez nous</h3>
                    <div class="border"></div>
                    <h4>Vous avez une question ?</h4>
                    <h4>Vous rencontrez un problème ?</h4>
                    <p>N'hésitez pas pour cela rien de plus simple il vous suffit de remplir le formulaire et de
                        nous laisser votre message.</p>
                </div>
            </div>
            <form action="" method="post">
                <div class="mail-header">
                    <input type="text" name="" id="" placeholder="Nom">
                    <input type="email" name="" id="" placeholder="Adresse mail">
                </div>
                <div class="mail-text">
                    <textarea name="" id="" cols="30" rows="10" placeholder="Votre message"></textarea>
                </div>
                <div class="submit-button-container">
                    <input type="submit" value="Envoyer">
                </div>
            </form>
        </div>
        <div class="info-contact">

            <div class="div-center">
                <div class="address">
                    <div class="icon">
                        <img src="assets/icon/icons8-address-64.png">
                    </div>
                    <div class="text">
                        <h3>adresse :</h3>
                        <p><?= $user['ADRESSE_UTI'] ?></p>
                    </div>
                </div>

                <div class="mail">
                    <div class="icon">
                        <img src="assets/icon/icons8-email-filled-64.png">
                    </div>
                    <div class="text">
                        <h3>mail :</h3>
                        <a href="mailto:david.teixeira31@gmail.com"><?= $user['MAIL_UTI'] ?></a>
                    </div>
                </div>

                <div class="phone">
                    <div class="icon">
                        <img src="assets/icon/icons8-cell-phone-64.png">
                    </div>
                    <div class="text">
                        <h3>téléphone :</h3>
                        <a href="tel:+33658736152">+33 <?= $user['TEL_UTI'] ?></a>
                    </div>
                </div>

                <div class="freelance">
                    <div class="icon">
                        <img src="assets/icon/icons8-code-64.png">
                    </div>
                    <div class="text">
                        <h3>freelance :</h3>
                        <p>Disponible pour du freelance</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<?php require_once("include/footer.php") ?>