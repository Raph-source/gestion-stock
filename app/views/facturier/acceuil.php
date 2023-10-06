<?php
    $title = "Acceuil";
    $style = ASSETS_CSS.'facturier/acceuil.css';
    require_once HEADER;
?>
<div class="container">
    <div class="form">
        <h3>Rechercher un produit</h3>
        <form action="genererFacture" method="post">
            <input type="text" name="produitChercher" id="produitChercher" placeholder="Rechercher..." class="inputRech"/><br>
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
                $script1 = ASSETS_JS.'facturier/acceuil.js';
                require_once FOOTER;
            ?>
    </div>
</div>