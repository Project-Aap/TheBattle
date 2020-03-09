<?php
    include "../includes/classAutoloader.inc.php";

    if (isset($_POST["createButton"])) {
        $createName = $_POST["createName"];
        $createDescription = $_POST["createDescription"];
        $createPrice = $_POST["createPrice"];

        $productsController = new ProductsController;

        if (empty($createName) || empty($createDescription) || empty($createPrice)) {
            header("Location: ../pages/create.php?create=emptyFields");
            exit;
        } else {
            $productsController->createProductController($createName ,$createDescription, $createPrice);

            header("Location: ../pages/create.php?create=success");
            exit;
        }
    } else {
        header("Location: ../pages/create.php");
        exit;
    }
?>