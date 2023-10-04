<?php
    $title = "Acceuil";
    $style = ASSETS_CSS.'facturier/acceuil.css';
    require_once HEADER;
?>
<form action="genererFacture" method="post">
<input type="text" id="produitChercher" placeholder="Rechercher..." /><br>
<input type="submit" value="valider" id="validation">
</form>

<div id="produitTrouver">
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