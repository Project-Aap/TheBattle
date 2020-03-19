<?php
    require "adminPanel/articles/includes/classAutoloaderHomepage.inc.php";
    session_start();

    $articlesView = new ArticlesView();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
       <title>Document</title>
    <script src="https://kit.fontawesome.com/fd9dd58e6a.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="slick/slick.js"></script>

    <script type="text/javascript" src="slick/slick.min.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- society if javascript could kk work for once  -->

</head>

<body>
    <?php
    // Require the header
    require('header.php');
    ?>
    <main>
        <div class="wrapper darkblue-bc">
            <!-- require header here?? -->
            <div class="block-1 content-width">
            </div>
            <div class="block-2 content-width darkblue-bc white">
                <h2>Locatie</h2>
                <div class="location yellow">
                    <div class="location-left">
                    <p>Het debat zal plaatsvinden in de koepel,
                        u kunt De Koepel betreden via de grote houten deur.
                    </p>
                    <a class="navigate-route" href="https://www.google.nl/maps/search/de+koepel+breda/
                    @51.590105,4.7879038,722m/data=!3m1!1e3?hl=nl">Check de route!
                    <div class="bottom white"><p>Nassau Singel 26 Breda</p></div>
                    </a>                              
                    </div>
                    <div class="mapouter"><div class="gmap_canvas"><iframe  width="450px" height="450px" id="gmap_canvas" 
                    src="https://maps.google.com/maps?q=De%20koepel%20breda&t=&z=17&ie=UTF8&iwloc=&output=embed" 
                    frameborder="0" scrolling="no"  marginheight="0" marginwidth="0"></iframe><a href="https://www.bitgeeks.net"></a>
                    </div><style>.mapouter{text-align:right;height:450px;width:450px;}.gmap_canvas {overflow:hidden;
                    background:none!important;height:450px;width:450px;}</style></div>
                </div>
            </div>
        </div>
        <!-- ============ END OF BLOCK-1 AND START OF BLOCK-2 ========= -->
        <div class="wrapper padding-top-bottom">
            <div class="block-2 content-width flex-between yellow">
                <div class="block-2-img flex">
                    <img src="img/entrance.jpg" alt="entrance.jpg" class="img-responsive">
                </div>
                <div class="block-2-content darkblue-bc margin20">
                    <h2 class="margin20">Tijden</h2>
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
        <!-- ================= facebook ============= -->
        <div class="facebook content-width flex-between">
            <div id="fb-root"></div>
            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/nl_NL/sdk.js#xfbml=1&version=v6.0"></script>
            <div class="fb-like" data-href="https://www.facebook.com/Curiodebatteam/" data-width="100" data-layout="standard" data-action="like" data-size="small" data-share="false"></div>
        </div>
        <!-- ================= start slideshow============= -->
        <div class="content-width">
            <h2>Actueel Nieuws</h2> 
        </div>                                 
        <div class="wrapper flex-between">                        
            <div class="content-width flex-between">              
                <div class="slider-area ">
                            <?php
                                foreach ($articlesView->getArticlesTrueView() as $item) {
                                    $file = $item["fileArticles"];
                                    $title = $item["titleArticles"];
                                    $description = $item["descriptionArticles"];
                                    echo "<div class=\"slide\">";
                                        echo "<div class=\"flex-article\">";
                                            echo "<img class=\"img-responsive\" src=\"adminPanel/articles/uploads/images/$file\" alt=\"placeholderimg\" class=\"img-fluid\" width=\"900\" height=\"350\">";
                                            echo "<article>";
                                                echo "<h3>$title</h3>";
                                                echo "<p>$description</p>";
                                            echo "</article>";
                                        echo "</div>";   
                                    echo "</div>";
                                }
                            ?>
                    <!--- these are the 3 dummy articles-->
                </div>
            </div>
        </div>

        <div class="wrapper darkblue-bc ">
        <div class=" yellow content-width">
                    <p>Stem hier of je het eens of oneens bent met de stelling
                    </p>
                    <div class="location-left grid2">
                    <a class="navigate-route" href="votegreen.html">Ja ik stem
                    <div class="bottom white votecolor"><p> <span>ik ben het ermee eens</span></p></div>
                    </a>    
                    <a class="navigate-route" href="votegreen.html">Ja ik stem
                    <div class="bottom white votecolor"><p>ik ben het er niet mee eens</p></div>
                    </a>                          
                    </div> 
                    
                </div>
            </div>
        </div>
    </main>
    <?php
    //  Require the footer
    ?>
    <!-- carousel script -->
    <script src="js/slick.js"></script>
    <script>
        $('.slider-area').slick({
            arrows: true,
            autoplay: true,
            autoplaySpeed: 3000,
            nextArrow: $('nextArrow'),
            prevArrow: $('.prevArrow')
            //  with autoplayspeed we can change the scrollspeed of divs
            });                                       
    </script>
</body>

</html>