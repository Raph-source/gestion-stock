let produits = document.querySelectorAll('.produit');
let produitTrouver = document.getElementById('produitTrouver');
let produitChercher = document.getElementById('produitChercher');
let validation = document.getElementById('validation');

//desactiver le boutton submit
validation.disabled = true;
//generer le formulaire
produitTrouver.addEventListener('click', function(event){
    let produitSelectioner = event.target;

    if(produitSelectioner.value !== undefined){
        //mettre le nom du produit dans le input
        produitChercher.value = produitSelectioner.value;
        //supprimer le proposition
        produitTrouver.innerHTML = "";
        //activer le boutton submit
        validation.disabled = false;
    }
});
let look = document.querySelector('.look');
let barre = document.querySelector('.barre');
let all = document.querySelector('.all');
let hor = document.querySelector('.hor');

let n = 0
setInterval(() => {
    if (look.getAttribute('class') == 'look look1' && barre.getAttribute('class')=='barre barre1') {
        look.classList.remove('look1');
        barre.classList.remove('barre1');
        all.classList.remove('div-sasa');
        hor.classList.remove('div-sasa1')
    }
    else{
        look.classList.add('look1');
        barre.classList.add('barre1')
        all.classList.add('div-sasa')
        hor.classList.add('div-sasa1')
    }
    n++
    
}, 1000);
