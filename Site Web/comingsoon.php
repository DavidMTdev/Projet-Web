<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/comingsoon.css">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">

    <title>Document</title>
</head>

<body>
    <div class="background">
    </div>
    <div class="container">
        <h1>Entreprise</h1>
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


    <script type="text/javascript">
        var count = new Date("sep 24,2019 00:00:00").getTime();
        var x = setInterval(function () {
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