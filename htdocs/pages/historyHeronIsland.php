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
    <div class="mainContainerHistory">
        <div class="historyContainerLeft"></div>
        <div class="historyContainerRight"></div>
        <div class="historyH3TitleContainer">
            <h3 class="h3History">About the Company</h3>
        </div>
        <div class="historyTextContainer">
            <p class="historyP">🪸🐠 Nestled along Queensland's stunning coastline, our scuba diving school began with a dream to share the beauty of the Great Barrier Reef with the world. Founded in 2005 by marine biologist and passionate diver Emily Waters, the school started as a small family-run business with a single boat and a big vision: to inspire a love for the ocean and foster a sense of responsibility for its preservation.

            Emily, who had spent years studying marine ecosystems, wanted to create a place where people of all skill levels could safely explore the underwater wonders of Queensland. Partnering with local conservationists and dive enthusiasts, she built a program that combined professional training with hands-on education about marine life.

            What started as weekend trips with a handful of adventurous students quickly grew into one of Queensland's premier scuba diving schools. Today, we boast a fleet of modern dive boats, state-of-the-art equipment, and a team of certified instructors dedicated to providing unforgettable experiences.

            From beginner courses to advanced certifications, every dive is designed to ignite your passion for the sea while contributing to ongoing reef conservation projects. With thousands of divers trained and countless lives touched, our school remains committed to its founding mission: to create a community of ocean ambassadors who protect and cherish the underwater world.🪸🐠</p>
        </div>
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
</body>
</html>