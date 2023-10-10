<?php
class ChercherProduit{
    private $bdd;
    public function __construct(){
        $this->bdd = new PDO("mysql:host=localhost;dbname=stock", "root", '');
    }
    public function getProduitsGestionnaireStock($enter):array{
        $requete = $this->bdd->prepare('SELECT nom FROM produit WHERE nom LIKE :entrer ORDER BY id ASC');
        $requete->bindValue(':entrer', '%' . $enter . '%');

        $requete->execute();
        $trouver = $requete->fetchAll(PDO::FETCH_COLUMN);


        return $trouver;    
    }

    public function getProduitsFacturier($enter):array{
        $requete = $this->bdd->prepare('SELECT nom FROM produit 
        WHERE nom LIKE :entrer AND uniteMax IS NOT NULL 
        AND uniteMin IS NOT NULL 
        AND uniteSec IS NOT NULL
        AND stock IS NOT NULL 
        ORDER BY id ASC');
        $requete->bindValue(':entrer', '%' . $enter . '%');

        $requete->execute();
        $trouver = $requete->fetchAll(PDO::FETCH_COLUMN);

        return $trouver;    
    }

    public function getProduitsGestionnaireAchat($enter):array{
        $requete = $this->bdd->prepare('SELECT nom FROM produit 
        WHERE nom LIKE :entrer 
        AND uniteMax IS NOT NULL 
        AND uniteMin IS NOT NULL 
        AND uniteSec IS NOT NULL 
        ORDER BY id ASC');
        $requete->bindValue(':entrer', '%' . $enter . '%');

        $requete->execute();
        $trouver = $requete->fetchAll(PDO::FETCH_COLUMN);

        return $trouver;   
    }

}

//rechercher produit
if(isset($_GET['action'])){
    if($_GET['action'] == 'autocompletionFacturier'){
        $entrer = $_GET['produitEntrer'];

        $facturier = new ChercherProduit();
        $trouver = $facturier->getProduitsFacturier($entrer);
    
        header('Content-Type: application/json');
        echo json_encode($trouver);
    }
    else if($_GET['action'] == 'autocompleteGestionnaireStock'){
        $entrer = $_GET['produitEntrer'];

        $facturier = new ChercherProduit();
        $trouver = $facturier->getProduitsGestionnaireStock($entrer);
    
        header('Content-Type: application/json');
        echo json_encode($trouver);
    }
    else if($_GET['action'] == 'autoCompleteGestionnaireAchat'){
        $entrer = $_GET['produitEntrer'];

        $facturier = new ChercherProduit();
        $trouver = $facturier->getProduitsGestionnaireAchat($entrer);
    
        header('Content-Type: application/json');
        echo json_encode($trouver);
    }
    
}



