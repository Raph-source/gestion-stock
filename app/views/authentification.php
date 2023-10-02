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
                        if(isset($notif))//echo $notif;

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

<script>
    let container = document.querySelector('.content')
    let btns = document.querySelector('.button').querySelectorAll('div');
    let src = document.querySelector('.img-hidden').getAttribute('src');
    let pos = 0
    let spans = document.querySelector('.text-paragraphe').querySelectorAll('span')
    document.body.onload = function(){
        let nbr = 3
        
        container.style.width = (43*nbr)+"em";
        for (let i = 1; i <= nbr ; i++) {
            let div = document.createElement('div')
            div.className = "div-carr"
            div.style.backgroundImage = "url("+src+i+".jpg"+")"
            container.appendChild(div)
        }

    }
    setInterval(() => {

            if (pos==0) {
                rmove(btns);
                btns[0].setAttribute('class',"active")
                container.style.transition = "all 0.3s ease-in-out"
                container.style.transform = "translateX(43em)"
                spans[0].textContent = "Suivre"
                spans[1].textContent = "stock"

                pos++
            }
            else if(pos==1){
                rmove(btns)
                btns[1].setAttribute('class',"active")
                container.style.transition = "all 0.3s ease-in-out"
                container.style.transform = "translateX(0)"
                spans[0].textContent = "Faite"
                spans[1].textContent = "inventaire"
                pos++
            }
            else{
                pos = 0;
                rmove(btns)

                btns[2].setAttribute('class',"active")
                container.style.transition = "all 0.3s ease-in-out"
                container.style.transform = "translateX(-43em)"
                spans[0].textContent = "Gerer"
                spans[1].textContent = "stock"
            }
        
        }, 2000);

    btns[0].addEventListener('click',function() {
        rmove(btns)
        btns[0].setAttribute('class',"active")
        container.style.transition = "all 0.3s ease-in-out"
        container.style.transform = "translateX(43em)"
    })
    btns[1].addEventListener('click',function() {
        rmove(btns)
        btns[1].setAttribute('class',"active")
        container.style.transition = "all 0.3s ease-in-out"
        container.style.transform = "translateX(0)"
    })
    btns[2].addEventListener('click',function() {
        rmove(btns)
        btns[2].setAttribute('class',"active")
        container.style.transition = "all 0.3s ease-in-out"
        container.style.transform = "translateX(-43em)"
    })
    function rmove(tab) {
        tab.forEach(element => {
            if (element.getAttribute('class')=='active') {
                element.classList.remove('active')
            }
        });
    }
</script>

<?php
    require_once FOOTER;
?>