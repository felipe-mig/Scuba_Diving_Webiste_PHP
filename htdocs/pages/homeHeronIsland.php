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
    <div class="ctaVideoContainer" style="z-index: -1;">
        <video src="../videos/ctaVideo.mp4" autoplay muted loop style="z-index: -1; position: fixed; height:115vh"></video>
    </div>
        <!--Nav-Bar-->
        <header>
            <!--logo-->
            <a href="#" class="logoATag"><div class="logo"></div></a>
            <a href="#" class="logoATag1"><h3 class="logo1">heron island</h3></a>
            <!--nav-list-->
            <nav>
                <ul>
                    <?php
                        navigationHeron();
                    ?>
                </ul>
            </nav>
        </header>
        <br><br><br>
        <div class="mainContainerHome">
            <h1>Queensland Scuba Diving Company</h1>
            <br><br>
            <h2>We dive not to escape life, but for life not to escape us</h2>
        </div>
        <br><br><br><br><br><br>
        <footer>
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
</body>
</html>