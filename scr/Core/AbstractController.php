<?php
namespace App\Core;

abstract class AbstractController {

    protected function render($view, $params) {
        //foreach ($params as $key => $value) {
        //    ${$key} = $value;
        //}
        extract($params);

        include "../src/views/{$view}.php";
    }
    //abstract public function hello();
    
}
?>