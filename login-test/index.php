<?php
    require "header.php";
?>
    <main>
        <?php
            if (isset($_SESSION["idUsers"])) {
                echo '<form action="includes/logout.inc.php" method="POST">';
                    echo '<input type="submit" name="logout-submit" value="logout">';
                echo '</form>';
                echo '<p>You are logged in!</p>';
                echo '<p>User:' . $_SESSION["idUsers"] . '</p>';
            } else {
                echo '<form action="includes/login.inc.php" method="POST">';
                    if (isset($_GET["uid"])) {
                        $uid = $_GET["uid"];
                        echo '<input type="text" name="uid" placeholder="Username" value="' . $uid . '">';
                    } else {
                        echo '<input type="text" name="uid" placeholder="Username">';
                    }
                    echo '<input type="password" name="pwd" placeholder="Password">';
                    echo '<input type="submit" name="login-submit" value="login">';
                echo '</form>';
                echo '<p>You are logged out!</p>';
            }

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
<?php
    require "footer.php";
?>