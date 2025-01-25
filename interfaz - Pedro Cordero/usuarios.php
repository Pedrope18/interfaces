<!DOCTYPE html>
<html>
<head>
    <title>Gestión de Usuarios</title>
    <link rel="stylesheet" href="list_usuarios.css">
</head>
<body>
    <h2>Lista de Usuarios</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Rol</th>
        </tr>
        <?php
        require 'conexion.php';
        require 'Usuario.php';

        $usuario = new Usuario($conn);
        $usuarios = $usuario->obtenerUsuarios();

        foreach ($usuarios as $usuario) {
            echo "<tr>";
            echo "<td>" . $usuario['id'] . "</td>";
            echo "<td>" . $usuario['nombre'] . "</td>";
            echo "<td>" . $usuario['email'] . "</td>";
            echo "<td>" . $usuario['rol'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
    <br>
    <a href="./">Regresar</a>
</body>
</html>
