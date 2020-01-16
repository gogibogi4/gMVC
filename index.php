<?php
    spl_autoload_register(function($class) {
        if (file_exists("classes/$class.php")) {
            include_once("classes/$class.php");
        } elseif (file_exists("Controllers/$class.php")) {
            include_once("Controllers/$class.php");
        }
    });
    
    include_once('Router.php')
?>