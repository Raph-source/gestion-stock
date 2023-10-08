let produits = document.querySelectorAll('.produit');
let produitTrouver = document.getElementById('produitTrouver');
let produitChercher = document.getElementById('produitChercher');
let validation = document.getElementById('validation');

//desactiver le boutton submit
if(produitChercher.value === "")
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

/*
let box = document.querySelectorAll('.box')
let boxcenter = document.querySelector('.boxcenter')

setInterval(() => {
    let n = 0
    if (box[0].getAttribute('class') == 'box box1' && boxcenter.getAttribute('class')=='boxcenter boxcenter1') {
        boxcenter.classList.remove('boxcenter');
        box.forEach(element => {
            element.classList.remove('box1')
        });

    }
    else{
        boxcenter.classList.add('boxcenter')

        box.forEach(element => {
            element.classList.add('box1')
        });
    }

}, 1000);*/