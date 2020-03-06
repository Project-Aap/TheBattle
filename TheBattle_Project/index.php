<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <?php
    // Require the header
    require('header.php');
    ?>
    <main>
        <div class="wrapper darkblue-bc">
            <div class="block-1 content-width">
            </div>
            <div class="block-2 content-width darkblue-bc white">
                <h2>Locatie</h2>
                <div class="location yellow">
                    <div class="location-left">
                    <p>Het debat zal plaatsvinden in de koepel,
                        u kunt de koepel betreden via de grote houten deur.
                    </p>
                    <a class="navigate-route" href="https://www.google.nl/maps/search/de+koepel+breda/
                    @51.590105,4.7879038,722m/data=!3m1!1e3?hl=nl">Check de route!
                    <div class="bottom"><p>Nassau Singel 26 Breda</p></div>
                    </a>                              
                    </div>
                    <img src="img/koepelpng.png" alt="locationimg">
                </div>
            </div>
        </div>
        <!-- ============ END OF BLOCK-1 AND START OF BLOCK-2 ========= -->
        <div class="wrapper padding-top-bottom">
            <div class="block-2 content-width flex-center yellow">
                <div class="block-2-img">
                    <img src="img/entrance.jpg" alt="entrance.jpg">
                </div>
                <div class="block-2-content darkblue-bc">
                    <h2>Tijden</h2>
                    <div class="list flex-between content-width-nomargin">
                        <ul>
                            <li><strong>Planning</strong></li>
                            <li>12:00 Koffie</li>
                            <li>12:30 Praten</li>
                            <li>13:15 Pauze</li>
                        </ul>
                        <ul>
                            <li><strong>Planning</strong></li>
                            <li>13:30 Praten</li>
                            <li>13:30 Koffie</li>
                            <li>14:00 Overleg</li>
                            <li>14:45 Zang</li>
                            <li>15:00 Afsluiting</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- ================= start slideshow============= -->
        <div class="wrapper padding-top-bottom">
            
        </div>
    </main>
    <?php
    //  Require the footer
    ?>

</body>

</html>