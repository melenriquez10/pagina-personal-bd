<?php
require('usuarios_modelo.php');
session_start();

$usuarios = $_GET['usuario'];
$dni = $_GET['clave'];

$sql = "SELECT * from usuarios where nombre = '$usuarios' and dni = '$dni'";

$resultado = login($sql);

if ($resultado < 1) {
    $mensaje = "Clave o usuario incorrecto";
    echo "<script type='text/javascript'>alert('$mensaje');</script>";
    echo "<a href='Login.html'>Volver a la página de Login </a>";
} else {
    echo "<center>";
    echo "<p> Se inicia Sesión!!, Usuario: $usuarios ";
    $_SESSION['usuario'] = $usuarios;
    echo "<p><A HREF='index.html'> Ir a menú principal --></A>";
}
?>
