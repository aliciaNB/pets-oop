<?php

session_start();

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require vendor/autoload file
require_once('vendor/autoload.php');

//Create an instance of the Base class (instantiate Fat-Free)
$f3 = Base::instance();

$f3->set('DEBUG', 3);

//Define a default route
$f3->route('GET /', function() {
    $view = new Template();
    echo $view-> render('views/my-pets.html');
});

//Run Fat-free
$f3->run();