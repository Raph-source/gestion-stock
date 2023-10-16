<?php
    $title = "Facuture";
    $style = ASSETS_CSS.'facturier/factu.css';
    $style1 = ASSETS_CSS.'links.css';
    require_once HEADER;
    $date = date('d-m-y');
?> 
<div class="container">
    <div class="facture">
        <h1><span>shalina</span> <span><?php echo $date;?></span></h1>
        <p ><span class="name">nom produit :</span>: <span><?php echo $nom;?></span></p>
        <p><span class="name">nom client : </span> <span><?php echo $nomClient;?></span></p>
        <p><span class="name">prix : </span> <span><?php echo $prix;?> $</span></p>
        <p><span class="name">quantité :</span> <span><?php echo $qte;?></span></p>
        <p><span class="name">Telephone : </span> <span><?php echo $phone;?></span></p>
        <p><span class="name">Total:  </span> <span><?php echo $qte * $prix;?></span></p>
        <a href="genererFacture" class="link">Retour</a>
    </div>
</div>

<?php
    $script = ASSETS_JS.'facturier/facture.js';
    require_once FOOTER;
?>