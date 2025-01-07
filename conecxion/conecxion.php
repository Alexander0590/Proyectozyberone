<?php
$servername = "localhost"; 
$usuario = "root"; 
$pass = ""; 
$db = "vya"; 

$cnn = new mysqli($servername, $usuario, $pass, $db);

if ($cnn->connect_error) {
    die("Conexión fallida: " . $cnn->connect_error);
}
?>
