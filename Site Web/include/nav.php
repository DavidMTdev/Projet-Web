<div class="nav-header">
    <div class="nav">
        <ul class="nav-menu">
            <li><a href=<?= "home.php?id=" . $_GET['id'] ?>>Accueil</a></li>
            <li><a href=<?= "about.php?id=" . $_GET['id'] ?>>A propos</a></li>
            <li><a href="">Entreprise</a></li>
            <li><a href=<?= "project.php?id=" . $_GET['id'] ?>>Projet</a></li>
            <li><a href="">Article</a></li>
        </ul>
        <ul class="nav-login">
            <?php if (isset($_SESSION["connectedAdmin"]) && $_SESSION["connectedAdmin"]) : ?>
                <li><a href="disconnection.php">Deconnexion</a></li>
            <?php else : ?>
                <li><a>Se connecter</a></li>
            <?php endif; ?>

        </ul>
        <div class="login">
            <form action="" method="post">
                <div>
                    <input type="text" name="login" placeholder="Pseudo">
                </div>
                <div>
                    <input type="password" name="password" placeholder="mot de passe">
                </div>
                <div>
                    <button type="submit">Connexion</button>
                </div>
            </form>
        </div>
    </div>
    <div class="menu-burger">
        <img src="icons/icons8-menu-70.png" alt="">
    </div>
    <script src="assets/js/navbar.js" async></script>
</div>