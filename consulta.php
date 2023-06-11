<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "laboratorio";

// Conectar con la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Comprobar la conexión a la base de datos
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Consultar todos los registros de la tabla laboratorio_final
$sql = "SELECT * FROM laboratorio_final";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Mostrar los registros en una lista
    echo "<h2>Registros de la base de datos</h2>";
    echo "<ul>";
    while ($row = $result->fetch_assoc()) {
        echo "<li>Nombre: " . $row["Nombre"] . ", Primer Apellido: " . $row["PrimerApellido"] . ", Segundo Apellido: " . $row["SegundoApellido"] . ", Email: " . $row["Email"] . ", Login: " . $row["Login"] . ", Password: " . $row["Password"] . "</li>";
    }
    echo "</ul>";
} else {
    echo "No se encontraron registros.";
}

// Cerrar la conexión
$conn->close();
?>