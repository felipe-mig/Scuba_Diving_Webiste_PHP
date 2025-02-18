<?php

include_once('../functions/functions.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QLD Scuba Diving</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="icon" href="../favicon/favicon_io/favicon.ico">
    <style>
        @font-face {
            font-family: sansita;
            src: url(../fonts/SansitaOne-Regular.ttf);
        }
        @font-face {
            font-family: mulish;
            src: url(../fonts/Mulish-Regular.ttf);
        }
    </style>
</head>
<body>
    <!--Nav-Bar-->
    <header class="pagesHeader">
        <!--logo-->
        <a href="homeGoldCoast.php" class="logoATag"><div class="logo"></div></a>
        <a href="homeGoldCoast.php" class="logoATag1"><h3 class="logo1">Gold Coast</h3></a>
        <!--nav-list-->
        <nav>
            <ul>
                <?php
                    navigationGoldCoast();   
                ?>
            </ul>
        </nav>
    </header>
    <!-- Content -->
     <div class="mainContainerGallery">
        <br><br><br><br>
        <div class="containerImages">
            <div class="card active" style="background-image: url(../images/pexels-ekamelev-3220368.jpg)">
                <h3> Explore</h3>
            </div>

            <div class="card" style="background-image: url(../images/reef-tank-3624204_1280.jpg)">
                <h3> Reef </h3>
            </div>

            <div class="card" style="background-image: url(../images/lemon-butterflyfish-380037_1280.jpg)">
                <h3>Butter Fish</h3>
            </div>

            <div class="card" style="background-image: url(../images/pexels-tomfisk-4610203.jpg)">
                <h3>Discover</h3>
            </div>

            <div class="card" style="background-image: url(../images/pexels-tomfisk-668790.jpg)">
                <h3> Adventure </h3>
            </div>
            
            <div class="card" style="background-image: url(../images/gettyimages-1204403352_custom-007ed68ee59b95360a75ef4dc8417b9f6692fb4b.jpg)">
                <h3> Dive </h3>
            </div>

            <div class="card" style="background-image: url(../images/pexels-richard-segal-732340-1645028.jpg)">
                <h3> Serenity </h3>
            </div>

            <div class="card" style="background-image: url(../images/pexels-mike-sember-1263707-9708480.jpg)">
                <h3> Escape </h3>
            </div>

            <div class="card" style="background-image: url(../images/pexels-rachel-claire-5864743.jpg)">
                <h3> Breathtaking </h3>
            </div>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <footer class="pagesFooter">
        <br>
            <!--social media-->
        <div class="copy-and-terms-container">
            <div class="social-media-container">
                <a href="https://github.com/felipe-mig" target="_blank"><i class="bi bi-github" id="giticon"></i></a>
                <a href="https://www.linkedin.com/in/felipeiglesiasgarcia/" target="_blank"><i class="bi bi-linkedin" id="linkedinicon"></i></a>
            </div>
            <p id="copyright">&copy; <span style="letter-spacing: 0.5em; font-size: .8em; text-transform:uppercase">2024 Felipe Iglesias Garcia</span></p>
        </div>
    </footer> 
    <script src="../js/gallery.js"></script>
</body>
</html>