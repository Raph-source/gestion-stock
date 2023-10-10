<?php
require_once MODEL.'model.php';
require_once MODEL.'produit.php';
require_once MODEL.'client.php';
require_once MODEL.'vente.php';
class Facturier extends Model{
    private $pseudo;
    private $pwd;
    public $produit;
    public $client;
    public $vente;

    public function __construct(){
        parent::__construct(); 
        $this->produit = new Produit();
        $this->client = new Client();
        $this->vente = new Vente();
    }
    public function setAttribut($pseudo, $pwd){
        $this->pseudo = $pseudo;
        $this->pwd = $pwd;
    }
    public function checkAuthentification():bool{
        $requete = $this->bdd->prepare("SELECT * FROM facturier WHERE nom = :pseudo AND pwd = :pwd");
        $requete->bindParam(':pseudo', $this->pseudo);
        $requete->bindParam(':pwd', $this->pwd);
        $requete->execute();

        $trouver = $requete->fetchAll();

        if(count($trouver) != 0)
            return true;
        return false;

    }

}