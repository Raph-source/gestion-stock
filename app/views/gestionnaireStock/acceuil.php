<?php
    $title = "Acceuil";
    $style = ASSETS_CSS.'gestionnaireStock/acceuil.css';
    require_once HEADER;
?>
<h1>acceuil gestionnaireStock</h1>
<?php
    if(isset($notif))
        echo $notif;
?>
<?php
    require_once FOOTER;
?>