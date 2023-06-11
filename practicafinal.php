<!doctype html>
<html>

<head>
<meta charset="utf-8">
<title>Formulario de registro SCII</title>
<link rel="stylesheet" href="estilos1.css" type="text/css">
</head>

<body>

<div class="grupo">
    <form method="POST" action="">

<h2><em>Formulario de registro</em></h2>


<label for="nombre">Nombre <span><em>(requerido)</em></span></label>
<input type="text" name="nombre" class="form-input" required placeholder="Nombre completo">

<label for="primerapellido">Primer Apellido <span><em>(requerido)</em></span></label>
<input type="text" name="primerapellido" class="form-input" required placeholder="Primer apellido">

<label for="segundoapellido">Segundo Apellido <span><em>(requerido)</em></span></label>
<input type="text" name="segundoapellido" class="form-input" required placeholder="Segundo apellido">

<label for="email">Email <span><em>(requerido)</em></span></label>
<input type="email" name="email" class="form-input" required placeholder="Asegúrese que tiene acceso a este email">

<label for="login">Login <span><em>(requerido)</em></span></label>
<input type="login" name="login" class="form-input" required placeholder="Complete este campo">

<label for="password">Password <span><em>(requerido)</em></span></label>
<input type="password" name="password" class="form-input" required placeholder="Entre 4 y 8 letras">

<input class="form-btn" name="submit" type="submit" value="Suscribirse">


<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nombre = $_POST['nombre'];
    $primerapellido = $_POST['primerapellido'];
    $segundoapellido = $_POST['segundoapellido'];
    $email = $_POST['email'];
    $login = $_POST['login'];
    $password = $_POST['password'];



    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "laboratorio";

// Conectar con la base de datos
    $conn = new mysqli($servername, $username, $password, $dbname);

// Comprobar la conexion a la base de datos
    if ($conn->connect_error) {
        die("Error de conexión: ". $conn->connect_error);
    }

// Verificar si el correo electrónico ya existe en la base de datos
$sql = "SELECT * FROM laboratorio_final WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<div class='error-message' >Ese correo electrónico ya está ocupado. Introduzca un nuevo email.</div>";
    exit; // Termina la ejecución del script si el correo electrónico ya existe
}

// si el correo no existe continuar con la inserción
    $sql = "INSERT INTO laboratorio_final (nombre, primerapellido, segundoapellido, email, login, password)
    VALUES ('$nombre', '$primerapellido', '$segundoapellido', '$email', '$login', '$password')";

// Ejecutar la query
if ($conn->query($sql) === TRUE) {
    echo "<div class='success-message'>Registro completado con éxito</div>";
    // mostrar el boton consultar solo siel registro se ha completado con éxito
    echo "<a href='consulta.php' class='btn-consulta'>Consultar</a>";
  } else {
    echo "<div class='error-message'>Error: " . $sql . "<br>" . $conn->error . "</div>";
  }

// Cierra la conexión

    $conn->close();

    }

?>

    </form>

</div>

<script src="script.js"></script>
</body>
</html>

