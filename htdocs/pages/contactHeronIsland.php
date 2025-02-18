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
        <a href="homeHeronIsland.php" class="logoATag"><div class="logo"></div></a>
        <a href="homeHeronIsland.php" class="logoATag1"><h3 class="logo1">Heron Island</h3></a>
        <!--nav-list-->
        <nav>
            <ul>
                <?php
                    navigationHeron();   
                ?>
            </ul>
        </nav>
    </header>
    <!-- Contact -->
     <div class="mainContainerContanct">
        <br><br>
        <h3 class="h3Contact">Contact</h3>
        <br>
        <form>
            <input type="text" name="name" value="" class="name-text" placeholder="Name">
            <input type="email" name="email" value="" class="text" placeholder="Email address">
            <input type="text" name="phone" value="" class="text" placeholder="Telephone number">
            <textarea name="enquiry" class="" placeholder="Enquiry"></textarea>
            <input type="submit" value="Send" id="send-btn">
        </form>
        <br><br>
        <p class="ContactP">37 Connor Street, Gold Coast Queensland 4220</p>
        <br>
        <p class="ContactP">queensland@scubadiving.com</p>
        <br>
        <p class="ContactP">+61 123456789</p>
     </div>
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
