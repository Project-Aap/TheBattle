<?php
  session_start();
?>
<?php require("header.php");?>
<body class="login">
    <main>
        <?php
            if (isset($_SESSION["idUsers"])) {
                echo '<p class="login-text">Welkom user '  . $_SESSION["idUsers"] . '!</p>';
            } else {
                // ============Dit krijg je te zien als je niet bent ingelogged=========
                echo '<form class="login-flex flex-reverse align-center" action="../backend/includes/login.inc.php" method="POST">';
                    if (isset($_GET["uid"])) {
                        $uid = $_GET["uid"];
                        echo '<input class="login-input" type="text" name="uid" placeholder="Username" value="' . $uid . '">';
                    } else {
                        echo '<input class="login-input" type="text" name="uid" placeholder="Username">';
                    }
                    echo '<input class="login-input" type="password" name="pwd" placeholder="Password">';
                    echo '<input class="login-submit" type="submit" name="login-submit" value="login">';
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