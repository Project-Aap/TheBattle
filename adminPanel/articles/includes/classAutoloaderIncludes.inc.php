<?php
    spl_autoload_register("classAutoloaderIncludes");

    function classAutoloaderIncludes($className) {
        $path = "../classes/";
        $extension = ".class.php";
        require_once $path . $className . $extension;
    }
?>