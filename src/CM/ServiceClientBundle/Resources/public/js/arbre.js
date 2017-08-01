

// $( document ).ready(function() {
var url="http://tools.cadeau-maestro.com/";
var compt=1; //compteur sur le nombre de click qui va permettre de savoir la profondeur des branches

//va chercher les branch sans parents et les passe en parametre de la fonction display
$.getJSON( url+"branche_parent",function(data){
    displayBranche(data);
});

//recupere les enfants de la branche passé en parametre par son id
function callBranch(id) {

    $.ajax({
        url: url + "branche/" + id,
        dataType: "json",
    }).done(function ( data ) {

        if (data == ""){ //si la branche n'a pas d'enfant alors on cherche ses solutions et ses mails
            compt++; //incremente le compteur
            callSolution(id); //si la branche n'a pas d'enfants, on va chercher ses solutions
        }
        else {
            compt++; //incremente le compteur
            displayBranche(data); //si la branche a des enfants, on les affiche
        }
    });
}

function callSolution(id) {
    $.getJSON(url + "solution_mail/" + id, function (data) {
        if (data != "") { //si la branche n'a pas d'enfant alors on cherche ses solutions et ses mails
            displaySolution(data);
        }
    });
}

//affiche les solutions et les mails
function displaySolution(data){
    var arrayIdMail = [];
    var nb = getRandomArbitrary(0,100000);
    $elem = "<div id=\"div" + compt + "\" > ";
    $elem += "<div id=\"row" + nb + "\" > ";
    $elem += "<div class=\"row\">";


    $.each(data, function (key, val) {

        $elem += "<div class=\"col-sm-4\">";
        $elem += "<div class=\"panel-group\" id=\"accordion" + val['id'] + nb + "\" role=\"tablist\" aria-multiselectable=\"true\">";
        $elem += "<div class=\"panel panel-default\">";
        $elem += "<div class=\"panel-heading\" role=\"tab\" id=\"headingOne" + val['id'] + nb + "\" >";
        $elem += "<h4 class=\"panel-title\">";
        $elem += "<a class=\"collapsed\" role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion" + val['id'] + nb + "\" href=\"#collapseOne" + val['id'] + nb + "\" aria-expanded=\"true\" aria-controls=\"collapseOne" + val['id'] + nb + "\">";
        $elem += val['nom'];
        $elem += "</a>            </h4>            </div>";
        $elem += "<div id=\"collapseOne" + val['id'] + nb + "\" class=\"panel-collapse collapse in\" role=\"tabpanel\" aria-labelledby=\"headingOne" + val['id'] + nb + "\" >";
        $elem += "<div class=\"panel-body\">";
        $elem += val['text'] + "<br>";

        //Ajoute le mail s'il existe
        if(val['mails'][0] != undefined)
        {
            $elem += "<div class=\"panel-group\" id=\"accordion_mail" + val['mails'][0]['id'] + nb + "\" role=\"tablist\" aria-multiselectable=\"true\">";
            $elem += "<div class=\"panel panel-default\">";
            $elem += "<div class=\"panel-heading\" role=\"tab\" id=\"headingMail" + val['mails'][0]['id'] + nb + "\" >";
            $elem += "<h4 class=\"panel-title\">";
            $elem += "<a class=\"collapsed\" role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion_mail\" href=\"#collapseMail" + val['mails'][0]['id'] + nb + "\" aria-expanded=\"false\" aria-controls=\"collapseMail" + val['mails'][0]['id'] + nb + "\">";
            $elem +=  "<div class=\"col-sm-6\">" + val['mails'][0]['nom'] + "</div>";
            $elem += "</a>";
            $elem += "<div id=\"copy_"+ val['mails'][0]['id'] + nb + "\" type=\"button\" class=\"btn btn-warning\"  >Copier le mail type </button> </div>";
            $elem += "</h4> </div>";
            $elem += "<div id=\"collapseMail" + val['mails'][0]['id'] + nb + "\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingMail" + val['mails'][0]['id'] + nb + "\" >";
            $elem += "<div class=\"panel-body\" id=\"MailText" + val['mails'][0]['id'] + nb + "\" >";
            $elem += val['mails'][0]['textMail'] + "<br>";
            $elem += "</div> </div> </div> </div>  ";

            arrayIdMail.push(val['mails'][0]['id'] + nb.toString());

        }
        $elem += "</div> </div> </div> </div> </div> ";

    });
    $elem += "</div>";
    $elem += "<div class=\"row\">";
    // $elem += "<div class=\"col-sm-2\"> <button id=\"iddi" + nb +"\" type=\"button\" class=\"btn btn-info\">Masquer </button> </div>";
    $elem += "</div> </div> </div> ";

    $( "#arbre" ).append($elem);

    //pour chaque mail on ajoute un listener qui va copier le contenu du mail dans le presse-papier
    for(i=0;i<arrayIdMail.length;i++) {
        $("#copy_" + arrayIdMail[i]).on("click", function () {
            var id = $(this).attr("id");    //recupere l'id du bouton
            id = id.replace("copy_",""); //recupere l'id de la branche uniquement
            var $textarea = $( '<textarea>' ); //construit un textarea
            $( 'body' ).append( $textarea ); //le fait apparaître
            $textarea.val( $( '#MailText'+id ).text() ).select(); //Ajoute dans le textarea le contenu de la cible à copier et le selectionne
            document.execCommand( 'copy' ); //copie dans le presse papier
            $textarea.remove(); //suppression du textarea
            return false;
        });
    }

    $(".btn-info").click(function(){ //fonction pour cacher toute la div depuis le bouton masquer
        var id = $(this).attr("id"); //recupere l'id
        id = id.replace("iddi","row"); //remplace l'id du bouton par l'id de la div englobant la row
        $("#"+id).remove(); // ensuite on supprime
    });
}


function displayBranche(data){
    var arrayId = [];
    var nb=getRandomArbitrary(0,100000); //donne un nombre aleatoire
    $elem = "<div id=\"div" +compt+ "\" > ";
    $elem += "<div class=\"row\" id=\"row" + nb + "\" > ";
    $.each(data, function (key, val) {
        $elem += "<div class=\"col-sm-3\">";
        $elem += "<p><button type=\"button\" class=\"btn btn-success btn-block\" id=\"" + val['id'] + "branche" + nb + "t" + compt + "\" <span class=\"glyphicon glyphicon-tags\"></span> " + val['nom'];
        $elem += "</button></p>";
        $elem += "</div>";

        arrayId.push(val['id']+"branche"+nb.toString()+"t"+compt.toString()); //on ajoute les id dans un tableau

    });
    if (compt != 1) { //n'affichera pas le bouton masquer pour les branches parentes
        // $elem += "<div class=\"col-sm-2\"> <button id=\"iddi" + nb + "\" type=\"button\" class=\"btn btn-info\">Masquer </button> </div>";
    }
    $elem += "</div> <hr> </div> ";
    $( "#arbre" ).append($elem);


    //pour chaque branche on ajoute un listener
    for(i=0;i<arrayId.length;i++) {
        $("#" + arrayId[i]).on("click", function () {

            $(this).prop("disabled", true);  //desactive le bouton
            var id = $(this).attr("id");    //recupere l'id du bouton

            var rank = id.substring(id.indexOf('t')+1,id.length); //recupere la valeur du compteur du bouton
            if(rank < compt){ //si l'utilisateur a cliqué sur une branche ayant un rang inférieur
                for(y=compt+1; y>rank; y--){ //supprime toutes les branches inférieures
                    var div_sup = "div"+y ;
                    $("#"+div_sup).remove(); //on supprime la div
                }
            }

            id = id.substring(0,id.indexOf('b')); //recupere l'id de la branche uniquement
            callBranch(id); //appel de la fonction callBranch
            $(this).prop('disabled', false); //active le bouton
            return false;
        });
    }

    $(".btn-info").click(function () {  //fonction pour cacher toute la div depuis le bouton masquer
        var id = $(this).attr("id"); //recupere l'id
        id = id.replace("iddi", "row");
        $("#" + id).remove(); //on supprime la div
    });

}

//donne un nombre aleatoire
function getRandomArbitrary(min, max) {
    return Math.round(Math.random() * (max - min) + min);
}


//JQuery UI
$(function(){

    $('#recherche').autocomplete({

        minLength : 2, // on indique qu'il faut taper au moins 2 caractères pour afficher l'autocomplétion
        appendTo: "#container", // affiche les suggestions dans la div container

        source : function(requete, reponse) {

            $.ajax({
                url: url+'recherche/' + $('#recherche').val(), // on appelle le script JSON
                dataType: 'json', // on spécifie bien que le type de données est en JSON
                data: {
                    maxRows: 10
                },
                success: function (donnee) {
                    reponse($.map(donnee, function (objet) {
                        return  objet.id+"   " + objet.nom; // on retourne cette forme de suggestion
                    }));

                }

            });
        }
    });
});

function recherche(){
    var inputText = $('input:text').val();     // récupération du contenu du champ de texte
    $('input:text').val(''); // modification du contenu du champ de text
    // var reg = /[0-9.:,h€]/g ;
    // inputText = inputText.replace(reg,"");
    inputText = inputText.substring(0,4).trim(); // recupère uniquement l'id
    $.getJSON(url + "branche_id/" + inputText, function (data) { //recherche de la branche par son nom
        compt++; //incremente le compteur
        $("#arbre").html(""); //efface la div
        if(data != "") {
            displayBranche(data);
            callSolution(data[0]['id']);
        }
    });
}

// }); //Document.ready

function rafraichissement(){
    location.reload();
}

function OngletOdoo(){
    url_odoo = "http://cadeaumaestro.eggs-solutions.fr:8069/web#page=0&limit=80&view_type=list&model=crm.helpdesk&menu_id=428&action=538";
    window.open(url_odoo);
}




