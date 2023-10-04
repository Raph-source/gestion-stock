<?php
require_once MODEL.'facturier.php';
class FacturierController{
    private $superGlobal;
    private $model;

    public function __construct(){
        $this->superGlobal = new SuperGlobal();
        $this->model = new Facturier();
    }

}


