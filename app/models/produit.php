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


    public function getUniteMin():int{
        
        $requete = $this->bdd->prepare("SELECT uniteMin FROM produit WHERE nom = :nom");
        $requete->bindParam(':nom', $this->produitChercher);
        $requete->execute();

        $trouver = $requete->fetch();
        
        return $trouver['uniteMin'];
    }


    public function getId():int{
        
        $requete = $this->bdd->prepare("SELECT id FROM produit WHERE nom = :nom");
        $requete->bindParam(':nom', $this->produitChercher);
        $requete->execute();

        $trouver = $requete->fetch();
        
        return $trouver['id'];
    }
    public function fournir($qte):void{
        //récuperation de la quantité en stock
        $stock = Produit::getStock();
        
        //nouvelle valeur en du stock
        $stock += $qte;

        $requete = $this->bdd->prepare("UPDATE produit SET entre = :entre, stock = :stock
        WHERE nom = :nom");
        $requete->bindParam(':entre', $qte);
        $requete->bindParam(':stock', $stock);
        $requete->bindParam(':nom', $this->produitChercher);

        $requete->execute();
    }

    public function vendre($qte):void{
        //récuperation de la quantité en stock
        $stock = Produit::getStock();

        //nouvelle valeur en du stock
        $stock -= $qte;

        $requete = $this->bdd->prepare("UPDATE produit SET sortie = :sortie, stock = :stock
        WHERE nom = :nom");
        $requete->bindParam(':sortie', $qte);
        $requete->bindParam(':stock', $stock);
        $requete->bindParam(':nom', $this->produitChercher);

        $requete->execute();
    }

    public function getInventaireAll():array{
        $requete = $this->bdd->query("SELECT * FROM produit
        WHERE uniteMax IS NOT NULL 
        AND uniteMin IS NOT NULL 
        AND uniteSec IS NOT NULL
        AND stock IS NOT NULL");

        $trouver = $requete->fetchAll();

        return $trouver;

    }

    public function getStock():int{
        $requete = $this->bdd->prepare("SELECT stock FROM produit WHERE nom = :nom");
        $requete->bindParam(':nom', $this->produitChercher);
        $requete->execute();

        $trouver = $requete->fetch();
        
        if($trouver['stock'] == NULL)
            return 0;
        return $trouver['stock'];
    }

    public function getPrix():float{
        $requete = $this->bdd->prepare("SELECT prix FROM produit WHERE nom = :nom");
        $requete->bindParam(':nom', $this->produitChercher);
        $requete->execute();

        $trouver = $requete->fetch();
        
        return $trouver['prix'];
    }
}