<?php
class Client extends Model{
    private $nom;
    private $phone;
    
    public function __construct(){
        parent::__construct();
    }

    public function setAttribut($nom, $phone){
        $this->nom = $nom;
        $this->phone = $phone;
    }

    public function save():void{
        $requete = $this->bdd->prepare("INSERT INTO client(nom, phone) 
        VALUES(:nom, :phone)");
        $requete->bindParam(':nom', $this->nom);
        $requete->bindParam(':phone', $this->phone);
        $requete->execute();
    }

    public function getPhone():string{
        $requete = $this->bdd->prepare('SELECT phone FROM client WHERE nom = :nom');
        $requete->bindParam(':nom', $this->nom);
        $requete->execute();

        $trouver = $requete->fetch();

        return $trouver['phone'];
    }

    public function checkClient():bool{
        $requete = $this->bdd->prepare('SELECT * FROM client WHERE nom = :nom AND phone = :phone');
        $requete->bindParam(':nom', $this->nom);
        $requete->bindParam(':phone', $this->phone);
        $requete->execute();

        $trouver = $requete->fetchAll();

        if(count($trouver) == 0)
            return true;
        return false;
    }
}