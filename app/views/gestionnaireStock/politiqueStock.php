<?php
   $title = "Politique stock";
    $style = ASSETS_CSS.'facturier/acceuil.css';
    $style1 = ASSETS_CSS.'gestionnaireStock/politiqueStock.css';
    require_once HEADER;
?>
    <div class="header">
        <div class="all">
            <div class="hor">

            </div>
        </div>
        <h3>Shalin<span>App</span></h3>
    </div>
<div class="container">
    <div class="content">
        <div class="ecrit">
             <h3>Definir la polique de</h3>
             <h3>stock d'un produit</h3>
        </div>
        
        <div class="anim-politique">
                <div class="carnet">
                    <div class="div"> <div class="bol"></div> <div class="barr" id="one"></div></div>
                    <div class="div"> <div class="bol"></div> <div class="barr" id="two"></div></div>
                    <div class="div"> <div class="bol"></div> <div class="barr" id="three"></div></div>
                </div>
        </div>

    </div>
    <div class="form">
        <form action="formulaire-politique-stock" method="post">
            <input type="text" name="produitChercher" id="produitChercher" placeholder="Rechercher..." /><br>
            <input type="number" name="uniteMax"  placeholder="Entrer l'unite maximal"/><br>
            <input type="number" name="uniteMin"  placeholder="Entrer l'unite minimal"/><br>
            <input type="number" name="uniteSec"  placeholder="Entrer l'unite de securité"/><br>
            <input type="submit" value="valider" id="validation">
        </form>

            <div id="produitTrouver" class="recherche">
            </div>
            <?php
                if(isset($notif))
                    echo $notif;
            ?>

            <?php
                $jquery = ASSETS_JS.'jquery-3.7.0.min.js';
                $script = ASSETS_JS.'chercherProduit.js';
                $script = ASSETS_JS.'animCroix.js';
                $script1 = ASSETS_JS.'gestionnaireStock/politiqueStock.js';
                require_once FOOTER;
            ?>
    </div>
</div>