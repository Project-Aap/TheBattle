<?php
    include "../includes/classAutoloader.inc.php";

    if (isset($_POST["deleteButton"])) {
        $deleteId = $_GET["id"];

        $productsController = new ProductsController;

        $productsController->deleteProductController($deleteId);

        header("Location: ../pages/index.php?page=1&delete=success");
        exit;
    } else {
        header("Location: ../pages/index.php?page=1");
        exit;
    }
?>