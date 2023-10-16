<?php
    $title = "Generer facture";
    $style = ASSETS_CSS.'facturier/genererFacture.css';
    require_once HEADER;
?>
    
    <form action="formulaire-generer-facture" method="post">
        <input type="text" name="nomClient" id="" placeholder="Entrez le nom du client" class="inputRech"/><br>
        <input type="number" name="qte" id="" placeholder="Entrez la quantité" class="inputRech"/><br>
        <input type="text" name="phone" id="" placeholder="Entrez le numero de telephone" class="inputRech"/><br>
        <input type="submit" value="valider" id="validation">
    </form>

    <?php
        if(isset($notif))
            echo $notif;
    ?>
<?php
    $script = ASSETS_JS.'facturier/genererFacture.js';
    require_once FOOTER;
?>