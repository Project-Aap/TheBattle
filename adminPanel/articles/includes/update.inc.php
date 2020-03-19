<?php
    require "../../checkModerator.php";
    include "../includes/classAutoloaderIncludes.inc.php";
    session_start();

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

        $articlesController = new ArticlesController();

        if (empty($title) || empty($description) || empty($fileName)) {
            header("Location: ../update.php?id=$id&update=emptyFields");
            exit;
        } elseif (!in_array($fileActualExt, $allowed)) {
            header("Location: ../index.php?update=invalidFileType");
            exit();
        } elseif ($fileError != 0) {
            header("Location: ../index.php?update=fileError");
            exit();
        } elseif ($fileSize > 1000000) {
            header("Location: ../index.php?update=maxFileSizeReached");
            exit();
        } else {

            $fileNameNew = uniqid("", true) . "." . $fileActualExt;
            $fileDestination = "..//uploads/images/" . $fileNameNew;
            move_uploaded_file($fileTmpName, $fileDestination);

            $articlesController->updateArticleController($title, $description, $fileNameNew, $id);

            header("Location: ../update.php?id=$id&update=success");
            exit;
        }
    } else {
        header("Location: ../update.php?id=$id");
    }
?>