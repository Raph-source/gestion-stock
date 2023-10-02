<?php
    $title = "Acceuil";
    $style = ASSETS_CSS.'facturier/acceuil.css';
    require_once HEADER;
?>
<h1>acceuil facturier</h1>
<?php
    if(isset($notif))
        echo $notif;
?>
<?php
    require_once FOOTER;
?>