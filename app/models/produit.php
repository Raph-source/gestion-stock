<?php
require_once MODEL.'model.php';
class Produit extends Model{

    public function getProduits($enter):array{
        $requete = $this->bdd->prepare('SELECT nom FROM produit WHERE nom LIKE :entrer');
        $requete->bindValue(':entrer', '%' . $enter . '%');

        $requete->execute();
        $trouver = $requete->fetchAll(PDO::FETCH_COLUMN);

        return $trouver;    
    }

}