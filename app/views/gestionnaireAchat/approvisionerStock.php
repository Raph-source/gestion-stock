<?php
    $title = "Approvisioner stock";
    $style = ASSETS_CSS.'gestionnaireAchat/approvisionerAchat.css';
    require_once HEADER;
?>
<form action="formulaire-approvisioner-stock" method="post">
    <input type="text" name="produitChercher" id="produitChercher" placeholder="Rechercher..." /><br>
    <input type="number" name="qte"  placeholder="Entrer la quantité"/><br>
    <label for="fournisseur">Chossissez un fournisseur</label>
    <select name="fournisseur" id="">
        <option value=""></option>

        <?php foreach($trouver as $fournisseur):?>

            <option value="<?php echo $fournisseur['nom'];?>"><?php echo $fournisseur['nom'];?></option>
        
        <?php endforeach?>

    </select> <br>
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
    $script1 = ASSETS_JS.'gestionnaireAchat/approvisionerStock.js';
    require_once FOOTER;
?>