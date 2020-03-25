<?php 
require "../checkModerator.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Scanner pagina</title>
	<link rel="stylesheet" href="css/ticket_style.css">
</head>
<body>
    <div class="wrapper">
        <?php
            if (isset($_SESSION["validScanner"])) {
                if($_SESSION["validScanner"]) {

                } 
                else {

                    exit;
                }
            } else {

                //exit;
            }
            if(isset($_SESSION["checkAccess"]))
            {
                if ($_SESSION["checkAccess"] == 2)
                {
                    echo '<div class="redBackground background">';
                    echo "<h1>Heeft al ingecheckt.</h1>";
                    unset($_SESSION["checkAccess"]);
                }
                else if($_SESSION["checkAccess"] == 3)
                {
                    echo '<div class="greenBackground background">';
                    echo "<h1>". $_SESSION['personName'] . " heeft aangemeld.</h1>";
                    unset($_SESSION["checkAccess"]);
                }
                else if ($_SESSION["checkAccess"] == 0)
                {
                    echo '<div class="redBackground background">';
                    echo "<h1>Niet aangemeld.</h1>";
                    unset($_SESSION["checkAccess"]);
                }
            } else {
                echo '<div class="normalBackground background">';
                echo "<h1>Welkom op de ticket scanner pagina.</h1>";
            }
        ?>
            <form action="backend/tickethandler.php" method="POST">
                <div>
                    <input name="text" type="text" id="text" value="" autofocus required placeholder="Zorg dat je dit geselecteerd hebt">
                </div>
            </form>
            <img src="img/background_circle.png" alt="background" id="background-image">
        </div>
    </div>
</body>
</html>