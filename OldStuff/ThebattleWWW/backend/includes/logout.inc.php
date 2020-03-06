<?php
    if (isset($_POST["logout-submit"])) {
        session_start();
        session_unset();
        session_destroy();

        header("Location: ../../frontend/login.php?logout=succes");
        exit();
    } else {
        header("Location: ../../frontend/login.php");
        exit();
    }
?>