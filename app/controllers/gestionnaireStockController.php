<?php
require_once MODEL.'gestionnaireStock.php';
class GestionnaireStockController{
    private $superGlobal;
    private $model;

    public function __construct(){
        $this->superGlobal = new SuperGlobal();
        $this->model = new GestionnaireStock();
    }

    public function getFormPolitiqueStock(){
        require_once VIEW.'gestionnaireStock/politiqueStock.php';
    }
    public function definirPolitiqueStock(){
        //verification des champs du formulaire
        if($this->superGlobal->checkPost(['produitChercher', 'uniteMax', 'uniteMin', 'uniteSec'])){
            
            $produitChercher = $this->superGlobal->post['produitChercher'];
            $uniteMax = intval($this->superGlobal->post['uniteMax']);
            $uniteMin = intval($this->superGlobal->post['uniteMin']);
            $uniteSec = intval($this->superGlobal->post['uniteSec']);
            
            //donner les attributs au produit
            $this->model->produit->setAttribut($produitChercher, $uniteMax, $uniteMin, $uniteSec);

            //tester si le produit existe
            if($this->model->produit->checkProduit()){
                //vérification de la validité des unités entrées
                if($uniteMax > $uniteMin && $uniteMax > $uniteSec && $uniteSec > $uniteMin){
                    //insertion de la poltique de stock du produit
                    $this->model->produit->setPolitiqueStock();
                    
                    $notif = "politique define avec succès";
                    require_once VIEW.'gestionnaireStock/politiqueStock.php';
                }
                else{
                    $notif = "les unitées ne sont pas valides";
                    require_once VIEW.'gestionnaireStock/politiqueStock.php';
                }
            }
            else{
                $notif = "ce produit n'existe pas !!!";
                require_once VIEW.'gestionnaireStock/politiqueStock.php';
            }
        }
        else{
            $notif = "pas des champs vide svp !!!";
            require_once VIEW.'gestionnaireStock/politiqueStock.php';
        }
    }

}