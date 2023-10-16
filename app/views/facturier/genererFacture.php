<?php
   $title = "Generer facture";
    $style = ASSETS_CSS.'facturier/acceuil.css';
    $style1 = ASSETS_CSS.'gestionnaireStock/politiqueStock.css';
    $style2 = ASSETS_CSS.'facturier/generer.css';
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
             <h3>Generer la</h3>
             <h3>facture</h3>
        </div>
        


    </div>
    <div class="form">
    <form action="formulaire-generer-facture" method="post">
        <input type="text" name="nomClient" id="" placeholder="Entrez le nom du client" class="inputRech"/><br>
        <input type="number" name="qte" id="" placeholder="Entrez la quantité" class="inputRech"/><br>
        <input type="text" name="phone" id="" placeholder="Entrez le numero de telephone" class="inputRech"/><br>
        <input type="submit" value="valider" id="validation" >

        <?php
                if(isset($notif))
                    echo "<p class='erreur'> ".$notif."</p>";
            ?>
    </form>



            <?php
            $script = ASSETS_JS.'facturier/genererFacture.js';
                require_once FOOTER;
            ?>
    </div>
</div>