<?php

session_start();

$date = new DateTime();
$aktualDate = $date->format("Y");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/queryes.css">
    <link rel="shortcut icon" href="./img/Vlk.ico" type="image/x-icon">

    <title>Vlkovy projekty</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="http://microsite.vlksamotar.wz.cz/">Microsite</a></li>
                <li><a href="">Lorem.</a></li>
                <li><a href="">In?</a></li>
                <li><a href="">Pariatur.</a></li>
                <li><a href="">Accusamus.</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="container">
            <section class="introduction">
                <h1 class="sectionHeader">Vlk samotář</h1>
                <p>Vítejte na jednom z Vlkových webů. Tento konkrétně slouží jako ukázka aplikace technologií, které
                    používám. Převážně, protože zde používám
                    hosting na Linuxových serverech, se jedná o PHP, JavaScript, HTML/CSS, SCSS, WordPress a podobně.
                    Více se dočtete na mém blogu, který běží pro
                    změnu na Windowsovských serverech a používá technologii ASP.NET CORE:</p>
                <a href="https://vlksamotar.cz/" target="_blank" class="blogLink">vlksamotar.cz</a>
            </section>
        </div>
    </main>
    <footer>
        &copy;
        <?= $aktualDate ?> Vlk samotář
    </footer>
</body>

</html>