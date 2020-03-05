<?php
    require "../includes/classAutoloader.inc.php";
    session_start();

    if (isset($_POST["delete"])) {
        $id = $_GET["id"];

        $articlesController = new ArticlesController();

        $articlesController->deleteArticlesController($id);

        header("Location: ../pages/index.php?delete=success");
        exit;
    } else {
        header("Location: ../pages/index.php");
        exit;
    }
?>