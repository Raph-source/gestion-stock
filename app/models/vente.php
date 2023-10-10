<?php
class Vente extends Model{
    public function __construct(){
        parent::__construct();
    }

    public function setVente($phone, $idProduit, $qte):void{
        $requete = $this->bdd->prepare('INSERT INTO vente(phone, idProduit, qte)
        VALUES(:phone, :idProduit, :qte)');

        $requete->bindParam(':phone', $phone);
        $requete->bindParam(':idProduit', $idProduit);
        $requete->bindParam(':qte', $qte);

        $requete->execute();
    }
}