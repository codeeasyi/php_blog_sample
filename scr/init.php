<?php

require "autoload.php";

function e($str) {
    return htmlentities($str, ENT_QUOTES, 'UTF-8');
}

$container = new App\Core\Container();

?>