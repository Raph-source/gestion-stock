<?php
class Fournisseur extends Model{
    public function __construct(){
        parent::__construct();
    }

    public function getAll():array{
        $requete = $this->bdd->query("SELECT nom FROM fournisseur");
        $trouver = $requete->fetchAll();

        return $trouver;
    }
}
