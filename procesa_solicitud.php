<?php
require_once('config.php');
require_once('conexion.php');
require_once('solicitud_seguro.php');

$conexion = new Conexion(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Obtener la conexión y trabajar con ella
$conn = $conexion->getConnection();

// Verificar que se hayan enviado los datos del formulario

    // Obtener los datos del formulario
    $nombre_asegurado           = $_POST['nombre_asegurado'];
    $apellido_asegurado         = $_POST['apellido_asegurado'];
    $fecha_nacimiento_asegurado = $_POST['fecha_nacimiento_asegurado'];
    $genero_asegurado           = $_POST['genero_asegurado'];
    $estado_civil_asegurado     = $_POST['estado_civil_asegurado'];
    $correo_asegurado           = $_POST['correo_asegurado'];
    $telefono_asegurado         = $_POST['telefono_asegurado'];
    $nombre_beneficiario        = $_POST['nombre_beneficiario'];
    $apellido_beneficiario      = $_POST['apellido_beneficiario'];
    $fecha_nacimiento_beneficiario = $_POST['fecha_nacimiento_beneficiario'];
    $genero_beneficiario        = $_POST['genero_beneficiario'];
    $estado_civil_beneficiario  = $_POST['estado_civil_beneficiario'];
    $correo_beneficiario        = $_POST['correo_beneficiario'];
    $telefono_beneficiario      = $_POST['telefono_beneficiario'];
    $tipo_seguro                = $_POST['tipo_seguro'];
    $monto_cobertura            = $_POST['monto_cobertura'];
    $plan_pago                  = $_POST['plan_pago'];

    // Crear una instancia de la clase SolicitudSeguro
    $solicitud = new SolicitudSeguro($conn);

    // Insertar la solicitud en la base de datos
    $resultado = $solicitud->insertarSolicitud(array(
        'nombre_asegurado' => $nombre_asegurado, 
        'apellido_asegurado' => $apellido_asegurado, 
        'fecha_nacimiento_asegurado' => $fecha_nacimiento_asegurado, 
        'genero_asegurado' => $genero_asegurado, 
        'estado_civil_asegurado' => $estado_civil_asegurado, 
        'correo_asegurado' => $correo_asegurado, 
        'telefono_asegurado' => $telefono_asegurado, 
        'nombre_beneficiario' => $nombre_beneficiario, 
        'apellido_beneficiario' => $apellido_beneficiario, 
        'fecha_nacimiento_beneficiario' => $fecha_nacimiento_beneficiario, 
        'genero_beneficiario' => $genero_beneficiario, 
        'estado_civil_beneficiario' => $estado_civil_beneficiario, 
        'correo_beneficiario' => $correo_beneficiario, 
        'telefono_beneficiario' => $telefono_beneficiario, 
        'tipo_seguro' => $tipo_seguro, 
        'monto_cobertura' => $monto_cobertura, 
        'plan_pago' => $plan_pago
        )
    );

    // Obtener el mensaje de error en caso de que se haya producido un error
    $error = $conexion->getConnection()->error;

    // Cerrar la conexión a la base de datos
    $conexion->closeConnection();

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Mensaje de resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        include 'header.php';
        
        // Mostrar un mensaje con el resultado de la operación
        if($resultado) {
            echo '<div class="alert alert-success my-alert" role="alert">
                    <h4 class="alert-heading">La solicitud se ha insertado correctamente</h4>
                  </div>';
        } else {
            echo '<div class="alert alert-danger my-alert" role="alert">
                    <h4 class="alert-heading">Ha ocurrido un error al insertar la solicitud</h4>
                    <p>' . $error . '</p>
                  </div>';
        }

        include 'footer.php'; 
    ?>
</body>
</html>