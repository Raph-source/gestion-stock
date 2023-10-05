<?php
require_once MODEL.'model.php';
class Produit extends Model{

    private $produitChercher;
    private $uniteMax;
    private $uniteMin;
    private $uniteSec;
    public function setAttribut($produitChercher, $uniteMax, $uniteMin, $uniteSec){
        $this->produitChercher = $produitChercher;
        $this->uniteMax = $uniteMax;
        $this->uniteMin = $uniteMin;
        $this->uniteSec = $uniteSec;
    }
    public function checkProduit():bool{
        $requete = $this->bdd->prepare('SELECT * FROM produit WHERE nom = :nom');
        $requete->bindParam(':nom', $this->produitChercher);

        $requete->execute();
        $trouver = $requete->fetchAll();

        if(count($trouver) != 0)
            return true;
        return false;
    }

    public function setPolitiqueStock():void{
        $requete = $this->bdd->prepare("UPDATE produit SET uniteMax = :uniteMax, uniteMin = :uniteMin, uniteSec = :uniteSec
        WHERE nom = :nom");
        
        $requete->bindParam(':uniteMax', $this->uniteMax);
        $requete->bindParam(':uniteMin', $this->uniteMin);
        $requete->bindParam(':uniteSec', $this->uniteSec);
        $requete->bindParam(':nom', $this->produitChercher);
        
        $requete->execute();

    }

    public function getUniteMax():int{
        
        $requete = $this->bdd->prepare("SELECT uniteMax FROM produit WHERE nom = :nom");
        $requete->bindParam(':nom', $this->produitChercher);
        $requete->execute();

        $trouver = $requete->fetch();
        
        return $trouver['uniteMax'];
    }

    public function fournir($qte){
        $requete = $this->bdd->prepare("UPDATE produit SET stock = :stock WHERE nom = :nom");
        $requete->bindParam(':stock', $qte);
        $requete->bindParam(':nom', $this->produitChercher);

        $requete->execute();
    }
}