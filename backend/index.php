<?php

// Require composer autoloader
require __DIR__ . '/vendor/autoload.php';
require  'rb.php';

//conexion a la base
R::setup('mysql:host=localhost;dbname=vya', 'root', '');

$router = new \Bramus\Router\Router();


//cabezeras
$router->options('.*', function () {
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
    header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With");
    exit();
});
//CRUD DE USUARIOS
//LISTAR USUARIOS
$router->get('/', function () {
    $usuario = R::find('usuarios');
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=utf-8");
    echo json_encode(R::exportAll($usuario));
});

// Run it!
$router->run();
?>