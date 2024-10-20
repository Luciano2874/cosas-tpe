<?php

class platformsModel {
    private $db;

    public function __construct(){
        $this->db = $this->getConnection();
    }

    public function getConnection () {
        return new PDO('mysql:host=localhost;'.'dbname=tienda_videojuegos;charset=utf8', 'root', '');
    }

    public function getPlataforms() {
        $queryPlataformas = $this->db->prepare('SELECT * FROM plataformas');
        $queryPlataformas->execute();

        $platforms = $queryPlataformas->fetchAll(PDO::FETCH_OBJ);

        return $platforms;
    }

}