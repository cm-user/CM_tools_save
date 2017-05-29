$('.faulty-action').collection({
    up: '<a href="#" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-up"></span> Haut </a> ',
    down: '<a href="#" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-down"></span> Bas </a> ',
    add: '<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-plus-sign"></span> Ajouter une note </a> ',
    remove: '<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Supprimer</a> ',
    duplicate: '<a href="#" class="btn btn-info"><span class="glyphicon glyphicon-th-large"></span> Dupliquer</a> ',
    allow_duplicate: false,
    drag_drop: false,
    drag_drop_options: {
        placeholder: 'ui-state-highlight'
    }
});
$('.faulty-product-image').collection({
    up: '<a href="#" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-up"></span> Haut </a> ',
    down: '<a href="#" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-down"></span> Bas </a> ',
    add: '<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-plus-sign"></span> Ajouter une image </a> ',
    remove: '<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Supprimer</a> ',
    duplicate: '<a href="#" class="btn btn-info"><span class="glyphicon glyphicon-th-large"></span> Dupliquer</a> ',
    allow_duplicate: false,
    drag_drop: false,
    drag_drop_options: {
        placeholder: 'ui-state-highlight'
    }
});

$(document).ready(function () {
    searchProduct();
});

//affiche la modal au clic du bouton rechercher
function searchProduct(){
    $('button.product-search').on("click",(function(e){
        e.preventDefault();
        var actual = $(this).parent().parent().find('input');
        var id = actual.attr('id');
        id = id.replace('search', '');
        $.ajax({
            url: Routing.generate('prestashop_search_product', {search: actual.val()}),
            success: function(result){
                var txt = '<div id="searchResult" class="row">';
                $.each($(result.product), function(cle, valeur){
                    txt += '<div class="col-sm-6 col-md-4"><div class="thumbnail"><img src="'+valeur.link_default_image+'" alt="'+valeur.name.language+'"><div class="caption"><h3>'+valeur.name.language+'</h3><p><a href="#" class="btn btn-primary" role="button" onclick="loadProduct('+valeur.id+')" data-dismiss="modal">Sélectionner</a></p></div></div></div>';
                });
                txt += '</div>';
                $("#searchProduct .modal-body").html(txt);
                $('#searchProduct').modal();
                $('#searchProduct').on('shown.bs.modal', function (e) {
                    doEqualHeight();
                });
            }
        });
    }));
}

var list_suppliers;
//remplit les champs automatiquement après avoir sélectionné un produit dans la modal
function loadProduct(idProduct){
    var id = $('form > div').attr('id')+'_product_';
    $.ajax({
        url: Routing.generate('faulty_prestashop_product', {id: idProduct}),
        success: function(result){
            console.log(result);            
            $('#'+id+'name').val(result.product.name.language);
            $('#'+id+'idPrestashopProduct').val(result.product.id);
            $('#'+id+'link').val(result.product.link);
            $('#'+id+'costPrice').val(result.product.wholesale_price);

            list_suppliers = result.product.suppliers;
            /*$('#'+id+'supplier_name').val(result.product.supplier_name);*/

            $.each(result.product.suppliers, function (i, item) {
                $('#'+id+'supplier_name').append($('<option>', {
                    value: item.name,
                    text : item.name
                }));
                if(i==0){
                    $('#'+id+'supplier_idPrestashopSupplier').val(item.id_supplier);
                    $('#'+id+'supplierReference').val(item.product_supplier_reference);
                }
            });

            $('#'+id+'supplier_name').change(function(){
                var value = $('#'+id+'supplier_name').val();
                $.each(list_suppliers, function(i, item){
                    if(item.name == value){
                        $('#'+id+'supplier_idPrestashopSupplier').val(item.id_supplier);
                        $('#'+id+'supplierReference').val(item.product_supplier_reference);
                    }
                });
            });

        }
    });
}

function doEqualHeight(){
    /*equalHeight($(".searchResult"));
    $(window).resize(fixThumbnailMargins);
    fixThumbnailMargins();*/
    $('#searchResult').imagesLoaded( function() {
        equalHeight($(".thumbnail"));
        $(window).resize(fixThumbnailMargins);
        fixThumbnailMargins();
    });
}

function equalHeight(group){
    tallest=0;
    group.each(function(){
        thisHeight=$(this).height();
        if(thisHeight>tallest){tallest=thisHeight;}}
    );
    group.each(function(){
        $(this).height(tallest);
    });
    group.each(function(){
        $(this).find("#block_link").addClass("block_link");
    });
}

function fixThumbnailMargins(){
    $('.row-fluid .thumbnails').each(function(){
        var $thumbnails= $(this).children(),
            previousOffsetLeft=$thumbnails.first().offset().left;
        $thumbnails.removeClass('first-in-row');
        $thumbnails.first().addClass('first-in-row');
        $thumbnails.each(function(){
            var $thumbnail=$(this),
                offsetLeft=$thumbnail.offset().left;
            if(offsetLeft<previousOffsetLeft){
                $thumbnail.addClass('first-in-row');
            }
            previousOffsetLeft=offsetLeft;
        });
    });
}