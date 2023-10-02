<?php
require_once MODEL.'model.php';
class GestionnaireAchat extends Model{
    private $pseudo;
    private $pwd;

    public function setAttribut($pseudo, $pwd){
        $this->pseudo = $pseudo;
        $this->pwd = $pwd;
    }
    public function checkAuthentification():bool{
        $requete = $this->bdd->prepare("SELECT * FROM gestionnaireAchat WHERE nom = :pseudo AND pwd = :pwd");
        $requete->bindParam(':pseudo', $this->pseudo);
        $requete->bindParam(':pwd', $this->pwd);
        $requete->execute();

        $trouver = $requete->fetchAll();

        if(count($trouver) != 0)
            return true;
        return false;

    }

}