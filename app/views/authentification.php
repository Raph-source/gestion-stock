<?php
    $title = "Authentfcation";
    $style = ASSETS_CSS.'authentification.css';
    require_once HEADER;
?>
<form action="authentification" method="post">
    <input type="text" name="pseudo" id="" placeholder="Entrez votre pseudo"><br>
    <input type="password" name="pwd" id="" placeholder="Entrez votre pseudo"><br>
    <input type="submit" value="Se connecter">
</form>
<?php
    require_once FOOTER;
?>