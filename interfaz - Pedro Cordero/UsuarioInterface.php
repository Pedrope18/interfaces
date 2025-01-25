<?php
interface UsuarioInterface {
    public function crearUsuario($nombre, $email, $password, $rol);
    public function obtenerUsuarios();
    public function obtenerUsuarioPorId($id);
    public function actualizarUsuario($id, $nombre, $email, $password, $rol);
    public function eliminarUsuario($id);
}
?>

