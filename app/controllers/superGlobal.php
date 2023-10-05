<?php
class SuperGlobal{
    public $post = [];
    public $get = [];

    /*cette méthode permet vérifier que toute les clé de méthode post existe*/
    public function checkPost($arrayOfKeys):bool{
        $trouver = 0;
        $lenArray = count($arrayOfKeys);

        foreach($arrayOfKeys as $key){
            if(!empty($_POST[$key])){
                $this->post[$key] = escapeshellcmd(htmlspecialchars($_POST[$key]));
                $trouver++;
            }
        }

        if($trouver == $lenArray)
            return true;
        return false;
    }

    /*cette méthode permet vérifier que toute les clé de méthode get existe*/
    public function checkGet($arrayOfKeys):bool{
        $trouver = 0;
        $lenArray = count($arrayOfKeys);

        foreach($arrayOfKeys as $key){
            if(!empty($_GET[$key])){
                $this->get[$key] = escapeshellcmd(htmlspecialchars($_GET[$key]));
                $trouver++;
            }
        }

        if($trouver == $lenArray)
            return true;
        return false;
    }
}
?>