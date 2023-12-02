<?php


class Pais {
    private $table = 'pais';
    private $connection;

    public function __construct() {
        $dbObj = new Db();
        $this->connection = $dbObj->connection;
    }

    public function getconnection(){
        // Lógica para obtener la conexión a la base de datos
        return $this->connection;
    }
    public function getPaices() {
        $this->getconnection();
        $sql = "SELECT * FROM $this->table";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute([]);

        return $stmt->fetchAll();
    }
    public function createPais($nombre,$poblacion,$capital,$imagen){
        $this->getconnection();
        $sql = "INSERT INTO pais (nombre, poblacion, capital, imagen_bandera)
        VALUES (?, ?, ?, ?);";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute([$nombre,$poblacion,$capital,$imagen]);

        return $stmt->fetchAll();
        

    }
}
