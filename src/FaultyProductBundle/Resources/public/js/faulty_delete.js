/**
 * Created by Okaou on 25/10/2017.
 */

$( "#btn_display" ).click(function() {
    var number = parseInt($("#input_intervalle").val(),10); //valeur du champ number
    var elem = "";
    $.ajax({
        url: Routing.generate('faulty_view_refunded_json', {intervalle: number}),  //envoie sur le controleur le nouveau intervalle demandé
        
        success:function(result) {
            console.log(result);
            // $.each(result, function (key, val) {
            //     $elem += "<div class=\"col-sm-3\">";
            //     $elem += "<p><button type=\"button\" class=\"btn btn-success btn-block\" id=\"" + val['id'] + "branche" + nb + "t" + compt + "\" <span class=\"glyphicon glyphicon-tags\"></span> " + val['nom'];
            //     $elem += "</button></p>";
            //     $elem += "</div>";
            //
            //     arrayId.push(val['id']+"branche"+nb.toString()+"t"+compt.toString()); //on ajoute les id dans un tableau
            //
            // });
            //
            // $('#table_refunded').html(elem);
        }
    });
    
});
