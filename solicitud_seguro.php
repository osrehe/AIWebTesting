<?php
class SolicitudSeguro {
    protected $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function insertarSolicitud($datos) {

        // Preparar la consulta SQL
        $stmt = $this->conn->prepare("INSERT INTO 
                                        solicitudes (
                                            nombre_asegurado, 
                                            apellido_asegurado, 
                                            fecha_nacimiento_asegurado, 
                                            genero_asegurado, 
                                            estado_civil_asegurado, 
                                            correo_asegurado, 
                                            telefono_asegurado, 
                                            nombre_beneficiario, 
                                            apellido_beneficiario, 
                                            fecha_nacimiento_beneficiario, 
                                            genero_beneficiario, 
                                            estado_civil_beneficiario, 
                                            correo_beneficiario, 
                                            telefono_beneficiario, 
                                            tipo_seguro, 
                                            monto_cobertura, 
                                            plan_pago) 
                                        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"
                                    );

        // Vincular los parámetros
        $stmt->bind_param("sssssssssssssssss", 
                                        $datos['nombre_asegurado'],
                                        $datos['apellido_asegurado'], 
                                        $datos['fecha_nacimiento_asegurado'], 
                                        $datos['genero_asegurado'], 
                                        $datos['estado_civil_asegurado'], 
                                        $datos['correo_asegurado'], 
                                        $datos['telefono_asegurado'], 
                                        $datos['nombre_beneficiario'], 
                                        $datos['apellido_beneficiario'], 
                                        $datos['fecha_nacimiento_beneficiario'], 
                                        $datos['genero_beneficiario'], 
                                        $datos['estado_civil_beneficiario'], 
                                        $datos['correo_beneficiario'], 
                                        $datos['telefono_beneficiario'], 
                                        $datos['tipo_seguro'], 
                                        $datos['monto_cobertura'], 
                                        $datos['plan_pago']);

        // Ejecutar la consulta
        if ($stmt->execute()) {
            // Retornar el ID de la solicitud recién creada
            return $stmt->insert_id;
        } else {
            // Retornar falso si ocurrió un error
            return false;
        }

        // Cerrar la consulta
        $stmt->close();
    }
}
?>