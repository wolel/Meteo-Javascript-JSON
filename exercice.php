
<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset="utf-8">
    <title>JS-Meteo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">

</head>
<body>

<div class="container">
    <h2>Bruxelles</h2>
    <form action="index.php" method="GET">

        <div class="row">
            <div class="row">
                <h2>Meteo</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <label for="ville">Ville</label>
                <input type="text" id="ville" name="ville" placeholder="entrer votre ville">
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12" id="btn">
                <label for="ville">Ville</label>
                <button type="submit" id="btn_ville">Valider</button>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <label for="ville">Ville</label>
                <div id="date">Date</div>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="infos" id="temp_max">Temp.max: x°</div>
                <div class="infos" id="temp_min">Temp.min: x°</div>
                <div class="infos" id="pres">pres.Atmosphérique: xx</div>
                <div class="infos" id="wind">Vitesse du vent: xx km/h</div>
                <div class="infos" id="humidite">Humidité: xx%</div>
            </div>
        </div>

        <div class="row">
            <div id="temp_actuelle">7°</div>
        </div>

        <div id="img">
            <img src="" alt="image">
        </div>
    </form>
</div>

<script src="exercice.js"></script>
</body>
</html>


<?php
