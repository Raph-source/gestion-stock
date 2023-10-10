<?php
    $title = "Facuture";
    $style = ASSETS_CSS.'facturier/facture.css';
    require_once HEADER;
?>  
    <p>nom produt: <?php echo $nom;?></p>
    <p>nom client: <?php echo $nomClient;?></p>
    <p>prix: <?php echo $prix;?></p>
    <p>quantité: <?php echo $qte;?></p>
    <p>Telephone: <?php echo $phone;?></p>
    <p>Total: <?php echo $qte * $prix;?></p>
<?php
    $script = ASSETS_JS.'facturier/facture.js';
    require_once FOOTER;
?>