<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curio.nl | TheBattle</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <header>
    <div class="w-header wrapper">
      <div class="logo">
        <a href="#index.php">Curio</a>
      </div>
      <nav>

        <div id="hamburger">
          <a href="index.php">Mbo </a>
          <a href="#">TheBattle</a>
          <a href="#">Contact </a>
          <!-- if you want to add forms for the login system i would put it in here -->
          <a href="login.php"></a>  
          <!-- =========================================================== -->
        </div>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i class="fa fa-bars"></i>
        </a>
      </nav>
    </div>
    <!-- =======the hamburger menu javascript================== -->
    <script>
      function myFunction() {
        var x = document.getElementById("hamburger");
        if (x.style.display === "block") {
          x.style.display = "none";
        } else {
          x.style.display = "block";
        }
      }
    </script>
    <!-- =================================================== -->
    </header>
    <main>
        <?php
            if (isset($_SESSION["idUsers"])) {
                echo '<form action="../backend/includes/logout.inc.php" method="POST">';
                    echo '<input type="submit" name="logout-submit" value="logout">';
                echo '</form>';
                // =====================Hier kan je iets zetten als je ingelogged bent==============================
                echo '<p>You are logged in!</p>';
                // =====================Dit kan je wegdoen maar je kan bijvoorbeeld ook de naam uit de database halen=============
                echo '<p>User:' . $_SESSION["idUsers"] . '</p>';
            } else {
                // ============Dit krijg je te zien als je niet bent ingelogged=========
                echo '<form action="../backend/includes/login.inc.php" method="POST">';
                    if (isset($_GET["uid"])) {
                        $uid = $_GET["uid"];
                        echo '<input type="text" name="uid" placeholder="Username" value="' . $uid . '">';
                    } else {
                        echo '<input type="text" name="uid" placeholder="Username">';
                    }
                    echo '<input type="password" name="pwd" placeholder="Password">';
                    echo '<input type="submit" name="login-submit" value="login">';
                echo '</form>';
            }

            // ========Hier zijn de error messages (je kan ook de error messages ergens anders zetten)==========
            if (isset($_GET["login"])) {
                $signupCheck = $_GET["login"];

                if ($signupCheck == "emptyFields") {
                    echo '<p class="error">You didn\'t fill in all fields!</p>';
                } elseif ($signupCheck == "invalidUidAndPwd") {
                    echo '<p class="error">You filled a invalid username and a invalid password in!</p>';
                } elseif ($signupCheck == "invalidUid") {
                    echo '<p class="error">You filled a invalid username in!</p>';
                } elseif ($signupCheck == "invalidPwd") {
                    echo '<p class="error">You filled a invalid password in!</p>';
                } elseif ($signupCheck == "succes") {
                    echo '<p class="succes">Login succes!</p>';
                }
            }

            if (isset($_GET["logout"])) {
                $signupCheck = $_GET["logout"];

                if ($signupCheck == "succes") {
                    echo '<p class="succes">Logout succes!</p>';
                }
            }
        ?>
    </main>
</body>

</html>