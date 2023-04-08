<?php
class Conexion {
    private $servername;
    private $username;
    private $password;
    private $dbname;

    protected $conn;

    public function __construct($servername, $username, $password, $dbname) {
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;
        $this->dbname = $dbname;

        // Conexión a la base de datos
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        // Verificar si hay errores en la conexión
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function getConnection() {
        return $this->conn;
    }

    public function closeConnection() {
        $this->conn->close();
    }
}
?>