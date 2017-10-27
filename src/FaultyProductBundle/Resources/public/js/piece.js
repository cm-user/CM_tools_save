
//function pour déplacer et mettre à jour le défectueux en pièces détachées
function goPiece(str_id){ //l'id est celui du bouton
    var str2='';
    var reg = new RegExp('[a-zA-Z_]','g'); //regex sélectionnant le texte
    var id=str_id.replace(reg, str2); //ne laisse que les chiffres
    var detail = $('#detail_piece_' + id).val(); //recupére le contenu du champ textarea

    $('#btg_piece_'+id).addClass("btn-warning").removeClass("btn-primary"); //transforme le bouton cliqué en bouton warning
    $("#msg_piece_"+id).html("Merci de patienter quelques instants..."); //adresse un message à l'utilisateur

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

//function pour déplacer et mettre à jour le défectueux en perte
function goLoss(str_id){ //l'id est celui du bouton
    var str2='';
    var reg = new RegExp('[a-zA-Z_]','g'); //regex sélectionnant le texte
    var id=str_id.replace(reg, str2); //ne laisse que les chiffres
    var text = $('#detail_loss_' + id).val(); //recupére le contenu du champ textarea
    
    $('#btg_loss_'+id).addClass("btn-warning").removeClass("btn-primary"); //transforme le bouton cliqué en bouton warning
    $("#msg_loss_"+id).html("Merci de patienter quelques instants..."); //adresse un message à l'utilisateur

    $.ajax({
        url: Routing.generate('faulty_supplier_status_loss', {id: id, shipping:text}),

        success:function(result) {
            setTimeout(function() //on laisse un délai pour permettre à symfony de terminer ses requêtes
            {
                location.reload(); //rechargement de la page
            }, 4000);
        }

    });

    // $('#MyModal').modal('hide'); //ferme la modal (non nécessaire si on fait une redirection)
}
