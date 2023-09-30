<?php
    require_once CONTROLLER.'superGlobal.php';
    class SystemeController{
        private $superGlobal;

        public function __construct(){
            $this->superGlobal = new SuperGlobal();
        }
        public function getFormAuthentification(){
            require_once VIEW.'authentification.php';
        }
        
        public function authentification():void{
            if($this->superGlobal->checkPost(['pseudo', 'pwd'])){

            }
            else{
                $notif = "pas de champs vide svp !!!";
                require_once VIEW.'authentification.php';
            }
        }
    }