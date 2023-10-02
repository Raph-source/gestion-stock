<?php
    require_once CONTROLLER.'superGlobal.php';
    require_once MODEL.'systeme.php';
    class SystemeController{
        private $superGlobal;
        private $model;

        public function __construct(){
            $this->superGlobal = new SuperGlobal();
            $this->model = new Systeme();
        }
        public function getFormAuthentification(){
            require_once VIEW.'authentification.php';
        }
        
        public function authentification():void{
            //verification
            if($this->superGlobal->checkPost(['pseudo', 'pwd'])){
                //recuperation des champs
                $pseudo = $this->superGlobal->post['pseudo'];
                $pwd = $this->superGlobal->post['pwd'];

                //authentification
                $this->model->facturier->setAttribut($pseudo, $pwd);
                if($this->model->facturier->checkAuthentification()){//si c'est le facturier
                    require_once VIEW.'facturier/acceuil.php';
                }
                else{
                    $this->model->gestionnaireAchat->setAttribut($pseudo, $pwd);
                    if($this->model->gestionnaireAchat->checkAuthentification()){//si c'est getionnaire d'achat
                        require_once VIEW.'gestionnaireAchat/acceuil.php';
                    }
                    else{
                        $this->model->gestionnaireStock->setAttribut($pseudo, $pwd);
                        if($this->model->gestionnaireStock->checkAuthentification()){//si c'est getionnaire de stock
                            require_once VIEW.'gestionnaireStock/acceuil.php';
                        }
                        else{
                            $notif = "Mot de passe ou pseudo incorrect";
                            require_once VIEW.'authentification.php';
                        }
                    }
                }
            }
            else{
                $notif = "Pas de champs vide svp !!!";
                require_once VIEW.'authentification.php';
            }
        }
    }