<?php
    require "../../checkModerator.php";
    require "../includes/classAutoloaderIncludes.inc.php";
    session_start();

    if (isset($_POST["delete"])) {
        $id = $_GET["id"];

        $articlesController = new ArticlesController();

        $articlesController->deleteArticlesController($id);

        header("Location: ../index.php?delete=success");
        exit;
    } else {
        header("Location: ../index.php");
        exit;
    }
?>