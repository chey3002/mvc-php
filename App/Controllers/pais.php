<?php

require_once APP.'Model/pais.php';


class paisController {
    public $page_title;
    public $view;
    public $paisObj;


    public function __construct() {

        $this->view = 'dashboard';
        $this->page_title = '';
        $this->paisObj = new Pais();
    }

    public function listar(){
    $this->page_title = 'Index';
	$this->view = 'index';
        $dataToView["data"] = $this->paisObj->getPaices();

    return $dataToView["data"];
}
   public function nuevo(){
    $this->page_title = 'Index';
	$this->view = 'index';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST["nombre"];
    $poblacion = $_POST["poblacion"];
    $capital = $_POST["capital"];
    $imagen_bandera = $_POST["imagen"];
    $this->paisObj->createPais($nombre,$poblacion,$capital,$imagen_bandera);
}
    
    $dataToView["data"] = $this->paisObj->getPaices();

    return $dataToView["data"];
}
}
