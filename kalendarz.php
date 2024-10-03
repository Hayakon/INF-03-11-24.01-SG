<!DOCTYPE HTML>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <title>zadania na lipiec</title>
        <link rel="stylesheet" type="text/css" href="styl6.css" href>
    </head>
    <body>
        <header>
        <div class="baner-1">
            <img src="logo1.png" akt="lipiec" height="140px">
        </div>
        <div class="baner-2">
            <h1>Terminarz<h1>
                <p>najblizsze zadania
                <?php
        $serwer =  'localhost';
        $uzytkownik = 'root';
       $password = '';
        $dbname = 'terminarz';

       $db = mysqli_connect($serwer, $uzytkownik, $password, $dbname);

        $q = 'SELECT DISTINCT wpis FROM `zadania` WHERE dataZadania BETWEEN "2020-07-01" AND "2020-07-07" AND wpis <>"";';
        $r = mysqli_query($db, $q);
        $zadania = "";
        while($row = mysqli_fetch_array($r)){
            $zadania .= $row["wpis"] ."; ";
        }
        echo $zadania;
        ?>
        </p>
        </div>
</header>
<main>
<?php

        $q = 'SELECT dataZadania, wpis FROM `zadania` WHERE miesiac = "lipiec";';
        $r = mysqli_query($db, $q);
       
        while($row = mysqli_fetch_array($r)){
        echo '<div class="kalendarz">
        <h6>'.$row["dataZadania"] .'<h6>
            <p>'.$row["wpis"].'</p>
    </div>';
        }
        ?>
</main>
        <footer>
        <div class="stopka">
            <a href="sierpien.html">terminarz sierpien</a>
            <p>Strone wykonał: Krzysztof Kwiatkowski</p>
        </div>
        </footer>
</body>
</html>