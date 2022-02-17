<?php

function autoload($className) {
    if (file_exists("./src/{$className}")) {
        require "./src/{$className}";
    }
}
spl_autoload_register("autoload");

?> 
    