<?php

$connent = mysqli_connect('localhost','root','','baza 1');
$sql = 'SELECT nazwa, wystepowanie FROM ryby';
$mquer = mysqli_query($connent, $sql);

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Wędkujemy</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <H1>Portal dla wędkarzy</H1>
    </header>

    <section class="lewo">
        <h2>Ryby drapieżne naszych wód</h2>
        <!-- Lista punktowa (nieuporządkowana) wypełniona przez skrypt -->
        <?php 
            while($zmienna = mysqli_fetch_assoc($mquer)){
                echo "<li>$zmienna[nazwa],$zmienna[wystepowanie]</li>";
            }
        ?>
    </section>

    <section class="prawo">
        <img class="sum" src="pliki\ryba1.jpg" alt="Sum">

        <br>
        <a href="pliki\kwerendy.txt">Pobierz kwerendy</a>

    </section>

    <footer>
        <p>Stronę wykonał: 00000000000</p>
    </footer>
</body>
</html>