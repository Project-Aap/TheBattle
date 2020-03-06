<?php
    include "../includes/classAutoloader.inc.php";

    if (isset($_POST["updateButton"])) {
        $updateName = $_POST["updateName"];
        $updateDescription = $_POST["updateDescription"];
        $updatePrice = $_POST["updatePrice"];
        $deleteId = $_GET["id"];

        $productsController = new ProductsController;

        if (empty($updateName) || empty($updateDescription) || empty($updatePrice)) {
            header("Location: ../pages/update.php?id=$deleteId&update=emptyFields");
            exit;
        } else {
            $productsController->updateProductController($updateName, $updateDescription, $updatePrice, $deleteId);

            header("Location: ../pages/update.php?id=$deleteId&update=success");
            exit;
        }
    } else {
        header("Location: ../pages/update.php?id=$deleteId");
    }
?>