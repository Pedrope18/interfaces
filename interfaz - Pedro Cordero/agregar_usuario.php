<?php
require 'conexion.php';
require 'Usuario.php';

$usuario = new Usuario($conn);

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$password = $_POST['password'];
$rol = $_POST['rol'];

if ($usuario->crearUsuario($nombre, $email, $password, $rol)) {
    echo "<script>";
    echo "window.onload = function() { 
    alert('Registrado Exitosamente'); 
    window.location.href = 'index.html';
};";
echo "</script>";
} else {
    echo "Error al agregar usuario.";
}
?>
