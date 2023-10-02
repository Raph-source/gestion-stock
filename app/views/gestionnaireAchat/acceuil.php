<?php
    $title = "Acceuil";
    $style = ASSETS_CSS.'gestionnaireAchat/acceuil.css';
    require_once HEADER;
?>
<h1>acceuil gestionnaireAchat</h1>
<?php
    if(isset($notif))
        echo $notif;
?>
<?php
    require_once FOOTER;
?>