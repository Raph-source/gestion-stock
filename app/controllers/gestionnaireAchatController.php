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

    public function approvisionerStock():void{
        //vérfication des champs formulaire
        if($this->superGlobal->checkPost(['produitChercher', 'qte', 'fournisseur'])){

            $produitChercher = $this->superGlobal->post['produitChercher'];
            $qte = $this->superGlobal->post['qte'];

            $this->model->produit->setAttribut($produitChercher, '', '', '');

            //verifier que le produit existe
            if($this->model->produit->checkProduit()){
                //verifier l'unité maximal
                $uniteMax = $this->model->produit->getUniteMax();
                if($qte <= $uniteMax && ($qte <= $uniteMax) < $uniteMax){
                    //inserer la quantité fournie
                    $this->model->produit->fournir($qte);

                    $notif = "opération réussi";
                    $trouver = $this->model->fournisseur->getAll();
                    require_once VIEW.'gestionnaireAchat/approvisionerStock.php';
                }
                else{
                    $notif = "la demande depasse la unité maximale";
                    $trouver = $this->model->fournisseur->getAll();
                    require_once VIEW.'gestionnaireAchat/approvisionerStock.php';
                }
            }
            else{
                $notif = "produit non trouvé !!!";
                $trouver = $this->model->fournisseur->getAll();
                require_once VIEW.'gestionnaireAchat/approvisionerStock.php';
            }
        }
        else{
            $notif = "pas de vide svp !!!";
            $trouver = $this->model->fournisseur->getAll();
            require_once VIEW.'gestionnaireAchat/approvisionerStock.php';
        }
    }
}
