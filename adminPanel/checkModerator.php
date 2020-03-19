<?php
    session_start();
    if (isset($_SESSION["ModeratorLogin"])) {
        if ($_SESSION["ModeratorLogin"] != true) {
            header("Location: ../index.php");
        }
    } else {
        header("Location: ../index.php");
    }
?>