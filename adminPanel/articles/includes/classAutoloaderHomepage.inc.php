<?php
    spl_autoload_register("classAutoloaderHomepage");

    function classAutoloaderHomepage($className) {
        $path = "adminPanel/articles/classes/";
        $extension = ".class.php";
        require_once $path . $className . $extension;
    }
?>