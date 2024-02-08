<?php

require_once('config.php');
require_once('conexion.php');

// ...

$conexion = new Conexion(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Obtener la conexión y trabajar con ella
$conn = $conexion->getConnection();

// Aquí puedes hacer lo que necesites con la conexión, por ejemplo una consulta...
$sql = "SELECT * FROM solicitudes";
$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
    while($fila = $resultado->fetch_assoc()) {
        echo "ID: " . $fila["id"] . " - Nombre: " . $fila["nombre_asegurado"] . "<br>";
    }
} else {
    echo "No se encontraron resultados.";
}

// Cerrar la conexión cuando hayas terminado
$conexion->closeConnection(); 

?>
