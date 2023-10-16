<?php
require_once MODEL.'facturier.php';
session_start();

class FacturierController{
    private $superGlobal;
    private $model;

    public function __construct(){
        $this->superGlobal = new SuperGlobal();
        $this->model = new Facturier();
    }

    public function getFormGenererFacture():void{
        //verification des champs
        if($this->superGlobal->checkPost(['produitChercher'])){
            $nom = $this->superGlobal->post['produitChercher'];

            $_SESSION['nomProduit'] = $nom;

            require_once VIEW.'facturier/genererFacture.php';
        }
        else{
            $notif = "pas de champs vide svp !!!";
            require_once VIEW.'facturier/acceuil.php';
        }
    }

    public function genererFacture(){

        if(!isset($_SESSION))
            session_start();
        
        if($this->superGlobal->checkPost(['nomClient', 'qte', 'phone'])){
            $nomClient = $this->superGlobal->post['nomClient'];
            $qte = $this->superGlobal->post['qte'];
            $phone = $this->superGlobal->post['phone'];
            
            if(isset($_SESSION['nomProduit']))
                $nom = $_SESSION['nomProduit'];
            else
                $nom = 'session expire';
    
            $this->model->produit->setAttribut($nom, '', '', '');
            //verifier si le produt existe
            if($this->model->produit->checkProduit()){
                //verifier l'unite minial et le stock
                $uniteMin = $this->model->produit->getUniteMin();
                
                $stock = $this->model->produit->getStock();

                if(($uniteMin > $qte) && (($stock - $qte) > $uniteMin)){
                    //inserer la quantité
                    $this->model->produit->vendre($qte);

                    //récuperation de l'id du produit
                    $idProduit = $this->model->produit->getId();

                    //vérifier si le client n'existe pas
                    $this->model->client->setAttribut($nomClient, $phone);
                    if($this->model->client->checkClient()){
                        //enregistrer le nouveau client
                        
                        $this->model->client->save();
                    }

                    //recuperation de numero du client
                    $phone = $this->model->client->getPhone();

                    //enregistrer la vente
                    $this->model->vente->setVente($phone, $idProduit, $qte);

                    //recuperation du prix du produit
                    $prix =  $this->model->produit->getPrix();

                    //afficher la facture
                    require_once VIEW.'facturier/facture.php';

                }
                else{
                    $notif = 'stock insuffisante';
                    require_once VIEW.'facturier/genererFacture.php'; 
                }
            }
            else{
                $notif = 'ce produit n\'existe pas !!!';
                require_once VIEW.'facturier/genererFacture.php';
            }
        }
        else{
            $notif = 'pas des champs vide svp !!!';
            require_once VIEW.'facturier/genererFacture.php';
        }
    }

    public function getAcceuil(){
        require_once VIEW.'gestionnaireAchat/acceuil.php';
    }
}


