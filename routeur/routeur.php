<?php
    class Routeur{
        private $request;//l'url demandé

        //le tableau des URLs, controleurs et leurs méthodes
        private $allRequest;
       
        public function __construct($request){
            $this->request = $request;
            $this->allRequest = [
                'SystemeController' => [
                    'index' => 'getFormAuthentification',
                    'authentification' => 'authentification'
                ],
                'facturierController' => [
                    'chercherProduit' => 'chercherProduit'
                ],
                'gestionnaireStockController' => [
                    'definir-politique-stock' => 'getFormPolitiqueStock',
                    'formulaire-politique-stock' => 'definirPolitiqueStock'
                ],

                'gestionnaireAchatController' => [
                    'approvisioner-stock' => 'getFormApprovisionerStock',
                    'formulaire-approvisioner-stock' => 'approvisionerStock'
                ]
            ];
        }
        //cette fonction renvoi au controleur demandé
        public function goToController(){
            //inclusion des controleurs
            require_once(CONTROLLER.'SystemeController.php');
            require_once(CONTROLLER.'facturierController.php');
            require_once(CONTROLLER.'gestionnaireStockController.php');
            require_once(CONTROLLER.'gestionnaireAchatController.php');

            //instantiation du controleur et déclanchement de la méthode
            $_404 = false;
            foreach($this->allRequest as $controller => $url_controller){
                if(key_exists($this->request, $url_controller)){
                    $methode = $url_controller[$this->request];
                    $classeController = new $controller();//instantiation du controleur
                    $classeController->$methode();//déclanchement de la méthode
                    $_404 = true;
                    break;
                }
            }

            if(!$_404)
                echo 'Ereur 404';
        }   
    }