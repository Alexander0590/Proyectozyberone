<?php

include('../conecxion/conecxion.php');

$usuario = $_POST['usuario'];
$contraseña = $_POST['clave'];


$sql = "SELECT * FROM usuarios WHERE usuario = ? AND contraseña = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $usuario, $contraseña);
$stmt->execute();
$result = $stmt->get_result();


if ($result->num_rows > 0) {
    session_start();
    $_SESSION['usuario'] = $usuario; 
    header("Location: ../panel_control.php");
} else {
    // Usuario o contraseña incorrectos
    $dato = "Usuario o Contraseña Incorrectos";
    header("Location: ../index.php?dato=" . urlencode($dato));
    exit();
    header("Location: ../index.php");
}

// Cerrar la conexión
$stmt->close();
$conn->close();
?>
