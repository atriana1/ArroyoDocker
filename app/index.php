
<!DOCTYPE html>
<html>
<head>
    <title>conexión de PHP y MySQL en AWS RDS</title>
</head>
<body>

<h2>Andres Triana - ArroyoConsulting - Conexión de PHP y MySQL en AWS RDS</h2>

<table border="1">
<tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Edad</th>
</tr>
<?php
// Datos de ejemplo
$personas = array(
    array("id" => 1, "nombre" => "Juan", "edad" => 25),
    array("id" => 2, "nombre" => "María", "edad" => 30),
    array("id" => 3, "nombre" => "Carlos", "edad" => 28),
);

// Iterar a través de los datos y generar filas de la tabla
foreach ($personas as $persona) {
    echo "<tr>";
    echo "<td>" . $persona["id"] . "</td>";
    echo "<td>" . $persona["nombre"] . "</td>";
    echo "<td>" . $persona["edad"] . "</td>";
    echo "</tr>";
}
?>
</table>

<?php
/*
// Configuración de la conexión a la base de datos
$servername = "localhost";
$username = "tu_usuario";
$password = "tu_contraseña";
$dbname = "nombre_de_la_base_de_datos";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}

// Consulta SQL para obtener los datos de la tabla
$sql = "SELECT * FROM nombre_de_la_tabla";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Imprimir los datos en una tabla HTML
    echo "<table border='1'><tr><th>ID</th><th>Nombre</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["nombre"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "No se encontraron resultados.";
}

// Cerrar la conexión
$conn->close();
*/
?>

</body>
</html>

