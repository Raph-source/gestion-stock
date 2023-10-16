<?php
    $title = "Approvisioner stock";
    $style = ASSETS_CSS.'facturier/acceuil.css';
    $style1 = ASSETS_CSS.'gestionnaireAchat/approvisionerAchat.css';
    $style2 = ASSETS_CSS.'links.css';
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
             <h3>Approvisionner</h3>
             <h3>votre stock</h3>
        </div>
        
      <!--  <div class="anim-appro">
                <div class="carnet">
                    <div class="box"></div>
                    <div class="box"></div>
                    <div class="box"></div>
                    <div class="box"></div>
                    <div class="boxcenter"></div>
                </div>
        </div> -->

    </div>
    <div class="form">
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

            <div id="produitTrouver" class="recherche">
            </div>
            <?php
                if(isset($notif))
                    echo $notif;
            ?>
            <a href="retour-acceuil-gestionnaire-achat" class="link">Retour</a>
    </div>
</div>

<?php
    $jquery = ASSETS_JS.'jquery-3.7.0.min.js';
    $script1 = ASSETS_JS.'gestionnaireAchat/approvisionerStock.js';
    require_once FOOTER;
?>