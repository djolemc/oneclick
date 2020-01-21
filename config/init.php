<?php

session_start();


require_once 'config.php';



//Autoload

spl_autoload_register('myAutoLoader');

function myAutoLoader($class_name) {
    require_once ('../classes/'.$class_name.'.php');
}


