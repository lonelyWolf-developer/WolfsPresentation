<?php

require "classes/Url.php";

session_start();

$date = new DateTime();
$aktualDate = $date->format("Y");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="title" content="Vlkovy projekty" />
    <meta name="description"
        content="Jsem kutil a nadšenec do technologií. Podívejte se na mé projekty." />

    <meta property="og:title" content="Vlkovy projekty">
    <meta property="og:type" content="website" />
    <meta property="og:description"
        content="Jsem kutil a nadšenec do technologií. Podívejte se na mé projekty.">
    <meta property="og:image" content="<?= Url::getBaseUrl() . '/img/baseSocialView.png' ?>">
    <meta property="og:url" content="<?= Url::getFullUrl() ?>">
    <meta name="twitter:card" content="summary_large_image">

    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/queryes.css">
    <link rel="shortcut icon" href="./img/Wolf.ico" type="image/x-icon">

    <title>Vlkovy projekty</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="http://microsite.vlk-samotar.cz/" target="_blank">Microsite</a></li>
                <li><a href="">Eshop</a></li>
                <li><a href="">Blog</a></li>
                <li><a href="">Hry</a></li>
                <li><a href="">Grafika</a></li>
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