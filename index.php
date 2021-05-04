<?php

ini_set('display_errors',1);
error_reporting(E_ALL);

//require autoload file
require_once('vendor/autoload.php');

//Instantiate fat-free
$f3=Base::instance();

//define route before your run fat-free
//define default route
$f3->route('GET /',function (){
    //Display the home page
    $view = new Template();
    echo $view-> render('views/info.html');
});


//Run Fat-Free /Fat free
$f3->run();