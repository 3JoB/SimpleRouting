<?php
    /**
    * Routing.php
    * https://github.com/3JoB/SimpleRouting
    * 2020-12-28
    **/
    $uri = $_SERVER['REQUEST_URI'];
    switch($uri){
        case "/":      include __DIR__ . "File path";  break;
        default:  include __DIR__ . "File path";
    }
