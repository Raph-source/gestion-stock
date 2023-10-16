<?php
    $title = "Acceuil";
    $style = ASSETS_CSS.'gestionnaireStock/acceuil.css';
    $style1 = ASSETS_CSS.'gestionnaireAchat/acceuil.css';
    require_once HEADER;
?>

<header class="header" >
    <div class="all">
        <div class="hor">

        </div>
    </div>
    <h3>Shalin<span>App</span></h3>
    <!--
    <div class="titl">
            <img src="<?php //echo ASSETS_IMG."pharmacie (1).png" ?>" alt="">
            <h3>Shalin<span>App</span></h3>
    </div>  -->
</header>
<div class="container">
    <div class="optopns">
        <div class="cards">
            <h3>Choisissez une <span>Operation</span></h3>
        </div>
        
        <div class="cards">
            <a href="approvisioner-stock">
                <h3>Approvisionner le stock</h3>
            </a>
        </div>
        
        
        <div class="cards">
            <a href="voir-inventaire">
                <h3>Voir l'inventaire</h3>
            </a>
        </div>
        <a href="index">Retour</a><br>
    </div>
</div>
<?php
    $script = ASSETS_JS.'gestionnaireStock/accueils.js';
    require_once FOOTER;
?>