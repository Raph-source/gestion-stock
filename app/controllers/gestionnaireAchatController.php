<?php
require_once MODEL.'gestionnaireAchat.php';
class GestionnaireAchatController{
    private $superGlobal;
    private $model;

    public function __construct(){
        $this->superGlobal = new SuperGlobal();
        $this->model = new GestionnaireAchat();
    }

    public function getFormApprovisionerStock():void{
        $trouver = $this->model->fournisseur->getAll();
        require_once VIEW.'gestionnaireAchat/approvisionerStock.php';
    }
}
