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
            url: lienAbsolu + 'app/models/chercherProduit.php?action=autocompletion',
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
