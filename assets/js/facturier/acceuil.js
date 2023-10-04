let produits = document.querySelectorAll('.produit');
let produitTrouver = document.getElementById('produitTrouver');
let produitChercher = document.getElementById('produitChercher');
let validation = document.getElementById('validation');

//desactiver le boutton submit
validation.disabled = true;
//generer le formulaire
produitTrouver.addEventListener('click', function(event){
    let produitSelectioner = event.target;
    //mettre le nom du produit dans le input
    produitChercher.value = produitSelectioner.value;
    //supprimer le proposition
    produitTrouver.innerHTML = "";
    //activer le boutton submit
    validation.disabled = false;
});
