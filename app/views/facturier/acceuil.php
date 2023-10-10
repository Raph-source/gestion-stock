<?php
    $title = "Acceuil";
    $style = ASSETS_CSS.'facturier/acceuil.css';
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
             <h3>Chercher  un</h3>
             <h3>produit</h3>
        </div>
        
        <div class="anim-chearch">
            <div class="look">

            </div>
            <div class="barre">

            </div>
        </div>

    </div>
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
    </div>
</div>

<?php
    $jquery = ASSETS_JS.'jquery-3.7.0.min.js';
    $script = ASSETS_JS.'facturier/acceuil.js';
    require_once FOOTER;
?>