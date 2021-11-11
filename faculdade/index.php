<?php

require('vendor/autoload.php');

use \Slim\Slim;
use \Ecommerce\Model\Admin;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function () {

    
    $admin = new Admin();

    $admin->teste();

    include('views/home.php');

});

$app->get("/admin/home", function(){

    include("views/admin/home.php");

});

$app->get("/admin/categoria", function(){


    include("views/admin/categorias.php");

});



$app->run();

?>