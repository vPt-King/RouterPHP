<?php
require __DIR__.'/../vendor/autoload.php';

$router = new App\Router();

$router->register('/public/' , function(){
    echo "home";    
});
$router -> register('/public/Invoices', function(){
    echo "invoices";
});

echo $router->resolve($_SERVER['REQUEST_URI']);
