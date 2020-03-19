<?php
    include "../includes/classAutoloaderIncludes.inc.php";
    session_start();

    if (isset($_POST["show"])) {
        $id = $_GET["id"];

        $articlesController = new ArticlesController();

        $articlesController->showArticleController($id);

        header("Location: ../index.php?show=success");
        exit;
    } elseif (isset($_POST["hide"])) {

        $id = $_GET["id"];

        $articlesController = new ArticlesController();

        $articlesController->hideArticleController($id);

        header("Location: ../index.php?hide=success");
        exit;
    } else {
        header("Location: ../update.php?id=$id");
    }
?>