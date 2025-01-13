<?php

session_start();
include('conexion.php');

$username = $_POST['username'];
$contrasena = $_POST['contrasena'];


$consulta = "SELECT * FROM usuarios WHERE username='$username' AND contrasena='$contrasena'";
$validar_login = $conexion->query($consulta);

if (mysqli_num_rows($validar_login) > 0) {
    $_SESSION['username']= $username;
    header("Location: deportes.php");
    exit;
} else {
    echo <<<EOD
    <script>
        alert("Usuario no existe, por favor verifique los datos introducidos");
        window.location = "registro.php";
    </script>
    EOD;
    exit;
}

mysqli_free_result($validar_login);
mysqli_close($conexion);

?>
