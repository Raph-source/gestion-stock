<?php
class ChercherProduit{
    private $bdd;
    public function __construct(){
        $this->bdd = new PDO("mysql:host=localhost;dbname=stock", "root", '');
    }
    public function getProduits($enter):array{
        $requete = $this->bdd->prepare('SELECT nom FROM produit WHERE nom LIKE :entrer ORDER BY id ASC');
        $requete->bindValue(':entrer', '%' . $enter . '%');

        $requete->execute();
        $trouver = $requete->fetchAll(PDO::FETCH_COLUMN);


        return $trouver;    
    }

}

//rechercher produit
if(isset($_GET['action'])){
    $entrer = $_GET['produitEntrer'];

    $facturier = new ChercherProduit();
    $trouver = $facturier->getProduits($entrer);

    header('Content-Type: application/json');
    echo json_encode($trouver);

}