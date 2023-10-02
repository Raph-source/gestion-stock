alert(lienAbsolu);

/*$(document).ready(function() {
    $('#produitChercher').keyup(function() {
        var entrer = $(this).val();

        $.ajax({
            url: 'autocomplete.php',
            type: 'GET',
            dataType: 'json',
            data: { entrer: entrer },
            success: function(response) {
                // Affiche les suggestions dans un élément HTML (par exemple une liste déroulante)
                $('#autocomplete_results').html('');
                $.each(response, function(index, value) {
                    $('#produitTrouver').append('<option value="' + value + '">' + value + '</option>');
                });
            }
        });
    });
});*/