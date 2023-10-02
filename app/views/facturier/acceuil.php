<?php
    $title = "Acceuil";
    $style = ASSETS_CSS.'facturier/acceuil.css';
    require_once HEADER;
?>
<input type="text" id="produitCherche" placeholder="Entrez le nom du produit"><br>
<div id="produitTrouver">
</div>
<?php
    if(isset($notif))
        echo $notif;
?>

<?php
    $jquery = ASSETS_JS.'jquery-3.7.0.min.js';
    $script = ASSETS_JS."facturier/acceuil.js";
    require_once FOOTER;
?>