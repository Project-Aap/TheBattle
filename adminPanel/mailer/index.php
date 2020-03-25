<?php 
require "../checkModerator.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Mailer</h1>
        <form action="generate.php" method="POST">
            <br>
            <label for="gmailUser">Je GMail: </label>
            <input type="text" name="gmailUser" id="gmailUser" placeholder="GMail">
            <br>
            <label for="gmailPassword">Je GMail wachtwoord: </label>
            <input type="password" name="gmailPassword" id="gmailPassword" placeholder="Wachtwoord">
            <p>Aangezien uw GMail bereikbaar moet zijn voor de Php Applicatie, zult u "Toegang door minder veilige apps" <a href="https://myaccount.google.com/lesssecureapps">hier</a> moeten inschakelen als u dat nog niet heeft gedaan.</p>
            <label for="mailSubject">Onderwerp van de mail: </label>
            <input type="text" name="mailSubject" id="mailSubject" placeholder="Onderwerp">
            <br>
            <label for="mailContent">Tekst van de mail: </label>
            <input type="text" name="mailContent" id="mailContent" placeholder="Mail tekst">
            <br>
            <label><input type="checkbox" name="addBarcode" id="addBarcode">Add personal barcode</label>
            <br>
            <br>
            <input type="submit" value="Verzend mail(s)">
        </form>
        <?php
            if(isset($_SESSION["succes"])){
                $succesMessage = $_SESSION["succes"];
                echo '<p class="text-success">' . $succesMessage . '</p>';
            }
            if(isset($_SESSION["error"])){
                $errorMessage = $_SESSION["error"];
                echo '<p class="text-danger">' . $errorMessage . '</p>';
            }
            session_destroy();
        ?>
    </div>
</body>
</html>