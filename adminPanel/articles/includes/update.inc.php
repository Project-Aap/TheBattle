<?php
    require "../../checkModerator.php";
    include "../includes/classAutoloaderIncludes.inc.php";

    if (isset($_POST["update"])) {
        $title = $_POST["title"];
        $description = $_POST["description"];
        $id = $_GET["id"];

        $fileName = $_FILES["file"]["name"];
        $fileTmpName = $_FILES["file"]["tmp_name"];
        $fileSize = $_FILES["file"]["size"];
        $fileError = $_FILES["file"]["error"];
        $fileType = $_FILES["file"]["type"];

        $fileExt = explode(".", $fileName);
        $fileActualExt = strtolower(end($fileExt));

        $allowed = ["jpg", "jpeg", "png"];

        $articlesView = new ArticlesView();
        $articlesController = new ArticlesController();

        if (empty($title) || empty($description)) {
            header("Location: ../update.php?id=$id&update=emptyFields");
            exit;
        } elseif (empty($fileName)) {
            $file = $articlesView->readArticleView($id)[0]["fileArticles"];
            $toggle = $articlesView->readArticleView($id)[0]["toggleArticles"];
    
            $articlesController->updateArticleController($title, $description, $file, $toggle, $id);

            header("Location: ../update.php?id=$id&update=success");
            exit;
        } else {
            if (!in_array($fileActualExt, $allowed)) {
                header("Location: ../update.php?id=$id&update=invalidFileType");
                exit();
            } elseif ($fileError != 0) {
                header("Location: ../update.php?id=$id&update=fileError");
                exit();
            } elseif ($fileSize > 1000000) {
                header("Location: ../update.php?id=$id&update=maxFileSizeReached");
                exit();
            } else {
                unlink("../uploads/images/" . $articlesView->readArticleView($id)[0]["fileArticles"]);
    
                $fileNameNew = uniqid("", true) . "." . $fileActualExt;
                $fileDestination = "..//uploads/images/" . $fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
    
                $toggle = $articlesView->readArticleView($id)[0]["toggleArticles"];
    
                $articlesController->updateArticleController($title, $description, $fileNameNew, $toggle, $id);
    
                header("Location: ../update.php?id=$id&update=success");
                exit;
            }
        }
    } else {
        header("Location: ../update.php?id=$id");
    }
?>