<?php
require_once MODEL.'facturier.php';
require_once MODEL.'gestionnaireStock.php';
require_once MODEL.'gestionnaireAchat.php';
class Systeme{
    public $facturier;
    public $gestionnaireStock;
    public $gestionnaireAchat;

    public function __construct(){
        $this->facturier = new Facturier();
        $this->gestionnaireAchat = new GestionnaireAchat();
        $this->gestionnaireStock = new GestionnaireStock();
    }
}