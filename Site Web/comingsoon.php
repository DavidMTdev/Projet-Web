<?php require_once("include/header.php"); ?>

<div class="background">
</div>
<div class="container">
    <?php if ($_GET['page'] == 'entreprise') : ?>
        <h1>Entreprise</h1>
    <?php elseif ($_GET['page'] == 'article') : ?>
        <h1>Article</h1>
    <?php endif; ?>
    <h2>En développement...</h2>
    <br>
    <br>
    <h2>Cette page sera disponible dans</h2>
    <div class="count-container">
        <div class="count">
            <div class="countd">
                <span id="days">00</span>
                JOURS
            </div>
            <div class="countd">
                <span id="hours">00</span>
                HEURES
            </div>
            <div class="countd">
                <span id="minutes">00</span>
                MINUTES
            </div>
            <div class="countd">
                <span id="seconds">00</span>
                SECONDES
            </div>
        </div>
    </div>
</div>
</main>

<script type="text/javascript">
    var count = new Date("sep 24,2019 00:00:00").getTime();

    var x = setInterval(function() {
        var now = new Date().getTime();
        var d = count - now;

        var days = Math.floor(d / (1000 * 60 * 60 * 24));
        var hours = Math.floor((d % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((d % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((d % (1000 * 60)) / (1000));

        document.getElementById("days").innerHTML = days;
        document.getElementById("hours").innerHTML = hours;
        document.getElementById("minutes").innerHTML = minutes;
        document.getElementById("seconds").innerHTML = seconds;

        if (d <= 0) {
            clearInterval(x);
        }
    }, 1000);
</script>
</body>

</html>