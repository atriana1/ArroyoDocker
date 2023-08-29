
<!DOCTYPE html>
<html>
<head>
    <title>conexión de PHP y MySQL en AWS RDS</title>
</head>
<body>

<h2>Andres Triana - ArroyoConsulting - Conexión de PHP y MySQL en AWS RDS</h2>

<?php
// Configuración de la conexión a la base de datos
$servername = "arroyomysql.cbtpihhbembs.us-west-2.rds.amazonaws.com";
$username = "admin";
$password = "Colombia2023.";
$dbname = "ArroyoDb";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}

// Consulta SQL para obtener los datos de la tabla
$sql = "SELECT * FROM personas";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Imprimir los datos en una tabla HTML
    echo "<table border='1'><tr><th>ID</th><th>Nombre</th><th>Edad</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["nombre"] . "</td><td>" . $row["edad"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "No se encontraron resultados.";
}

// Cerrar la conexión
$conn->close();

?>

</body>
</html>

