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

            /* RECHERCHE DU PRODUIT ASYNCHRONE*/

//récuperation du lien absolu
let lienAbsolu = window.location.href;

//decouper le lien et récuperer le nom du fichier actuel
let parties = lienAbsolu.split('/');
let dernierePartie = parties.pop();

//enlever le nom du fichier actuel
lienAbsolu = lienAbsolu.replace(dernierePartie, '');

$(document).ready(function() {
    $('#produitChercher').keyup(function() {
        let entrer = $(this).val();
        $('#produitTrouver').empty();
        $.ajax({
            url: lienAbsolu + 'app/models/chercherProduit.php?action=autocompleteGestionnaireStock',
            method: 'GET',
            data: { produitEntrer: entrer },
            dataType: 'json',
            success: function(trouver) {
                // Affiche les suggestions dans un élément HTML (par exemple une liste déroulante)
                $('#produitChercher').html('');
                $.each(trouver, function(index, valeur) {
                    $('#produitTrouver').append('<button value="' + valeur + '" class="produit">' + valeur + '</button><br>');
                });
            }
        });
    });
});