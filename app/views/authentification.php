<?php
    $title = "Authentfcation";
    $style = ASSETS_CSS.'authentification.css';
    require_once HEADER;
?>
<div class="container">
    <div class="form">
        <form action="authentification" method="post">
        <img src="<?php echo ASSETS_IMG.'pharmacie (3).png'; ?>" alt="">
        <h3>Login</h3>
            <input type="text" name="pseudo" id="" placeholder="Entrez votre pseudo"><br>
            <input type="password" name="pwd" id="" placeholder="Entrez votre pseudo"><br>
            <input type="submit" value="Se connecter">
                
                    <?php
                        if(isset($notif))
                            {
                                echo "<p class='erreur'>";
                                echo "<script>
                                    let a = document.querySelector('.erreur')
                                    a.classList.toggle('errVis')
                                "; 
                                echo "</script>";
                                echo $notif;
                                echo ' </p>';
                            }
                        
                    ?>
            
        </form>
    </div>
    
    <img src='<?php echo ASSETS_IMG."img" ?>' alt="" hidden class="img-hidden">
    <div class="content">

    </div>
    <div class="button">
            <div ></div>
            <div class="active"></div>
            <div></div>
    </div>
    <p class="text-paragraphe">
        <span>Faite</span> votre <span>inventaire</span> avec nous
    </p>
</div>


<?php
    $script = ASSETS_JS.'authentification.js';
    require_once FOOTER;
?>