<?php
    $title = "Politique stock";
    $style = ASSETS_CSS.'gestionnaireStock/politiqueStock.css';
    require_once HEADER;
?>
<form action="formulaire-politique-stock" method="post">
<input type="text" name="produitChercher" id="produitChercher" placeholder="Rechercher..." /><br>
<input type="text" name="uniteMax"  placeholder="Entrer l'unite maximal"/><br>
<input type="text" name="uniteMin"  placeholder="Entrer l'unite minimal"/><br>
<input type="text" name="uniteSec"  placeholder="Entrer l'unite de securité"/><br>
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
    $script1 = ASSETS_JS.'gestionnaireStock/politiqueStock.js';
    require_once FOOTER;
?>