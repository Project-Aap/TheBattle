<?php
    require "../includes/classAutoloader.inc.php";
    session_start();

    if (isset($_POST["upload"])) {
        $title = $_POST["title"];
        $description = $_POST["description"];

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
            header("Location: ../pages/index.php?create=emptyFields");
            exit();
        } elseif (!in_array($fileActualExt, $allowed)) {
            header("Location: ../pages/index.php?create=invalidFileType");
            exit();
        } elseif ($fileError != 0) {
            header("Location: ../pages/index.php?create=fileError");
            exit();
        } elseif ($fileSize > 1000000) {
            header("Location: ../pages/index.php?create=maxFileSizeReached");
            exit();
        } else {
            $fileNameNew = uniqid("", true) . "." . $fileActualExt;
            $fileDestination = "..//uploads/images/" . $fileNameNew;
            move_uploaded_file($fileTmpName, $fileDestination);

            $articlesController->createArticleController($title, $description, $fileNameNew);

            header("Location: ../pages/index.php?create=success");
            exit();
        }
    } else {
        header("Location: ../pages/index.php");
        exit();
    }
?>