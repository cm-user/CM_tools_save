
//function pour déplacer et mettre à jour le défectueux
function goPiece(id){ //l'id est celui du bouton
    var detail = $('#detail_' + id).val(); //recupére le contenu du champ textarea

    $('#'+id).addClass("btn-warning").removeClass("btn-primary"); //transforme le bouton cliqué en bouton warning
    $("#msg").html("Merci de patienter quelques instants..."); //adresse un message à l'utilisateur
    
    $.ajax({
        url: Routing.generate('faulty_supplier_status_piece', {id: id, new_reason:detail}),

        success:function(result) {
            setTimeout(function() //on laisse un délai pour permettre à symfony de terminer ses requêtes
            {
                location.reload(); //rechargement de la page
            }, 4000);
        }

    });

    // $('#MyModal').modal('hide'); //ferme la modal (non nécessaire si on fait une redirection)
}

