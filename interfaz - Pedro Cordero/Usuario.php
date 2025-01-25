<?php
require 'conexion.php';
require 'UsuarioInterface.php';

class Usuario implements UsuarioInterface {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function crearUsuario($nombre, $email, $password, $rol) {
        $hash = password_hash($password, PASSWORD_BCRYPT);
        $sql = "INSERT INTO usuarios (nombre, email, password, rol) VALUES ('$nombre', '$email', '$hash', '$rol')";
        return $this->conn->query($sql);
    }

    public function obtenerUsuarios() {
        $sql = "SELECT * FROM usuarios";
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function obtenerUsuarioPorId($id) {
        $sql = "SELECT * FROM usuarios WHERE id = $id";
        $result = $this->conn->query($sql);
        return $result->fetch_assoc();
    }

    public function actualizarUsuario($id, $nombre, $email, $password, $rol) {
        $hash = password_hash($password, PASSWORD_BCRYPT);
        $sql = "UPDATE usuarios SET nombre = '$nombre', email = '$email', password = '$hash', rol = '$rol' WHERE id = $id";
        return $this->conn->query($sql);
    }

    public function eliminarUsuario($id) {
        $sql = "DELETE FROM usuarios WHERE id = $id";
        return $this->conn->query($sql);
    }
}
?>
