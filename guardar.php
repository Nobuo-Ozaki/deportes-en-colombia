<?php

include 'conexion.php';

$username = $_POST['username'];
$contrasena = $_POST['contrasena'];
$email = $_POST['email'];
$cedula = $_POST['cedula'];
$contrasena= hash('sha512', $contrasena);


$query = "INSERT INTO usuarios(username, contrasena, email, cedula)
          VALUES('$username', '$contrasena', '$email', '$cedula')";

          $verificar_email = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email='$email'");

          if (mysqli_num_rows($verificar_email) > 0) {
              echo '
              <script>
                  alert("Este correo ya está registrado, intenta con otro diferente");
                  window.location = "../registro.php";
              </script>
              ';
              exit();
          }
          
          // Verificar que el nombre de usuario no se repita en la base de datos
          $verificar_username = mysqli_query($conexion, "SELECT * FROM usuarios WHERE username='$username'");
          
          if (mysqli_num_rows($verificar_username) > 0) {
              echo '
              <script>
                  alert("Este usuario ya está registrado, intenta con otro diferente");
                  window.location = "../registro.php";
              </script>
              ';
              exit();
          }
          

$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
    echo '
    <script>
        alert("Registro completado exitosamente");
        window.location = "registro.php";
    </script>
    ';
}else{
    echo '
    <script>
        alert("Inténtalo de nuevo, el registro no fue completado");
        window.location = "registro.php";
    </script>
    ';
}

mysqli_close($conexion);

?>