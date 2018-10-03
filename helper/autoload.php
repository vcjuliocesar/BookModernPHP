<?php
spl_autoload_register(function($className){
    //echo "intentando cargar {$className}";
    if(file_exists("../src/$className.php"))
    {
        require "../src/$className.php";
    }
});