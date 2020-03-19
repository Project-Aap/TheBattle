<?php
    spl_autoload_register("classAutoloaderPages");

    function classAutoloaderPages($className) {
        $path = "classes/";
        $extension = ".class.php";
        require_once $path . $className . $extension;
    }
?>