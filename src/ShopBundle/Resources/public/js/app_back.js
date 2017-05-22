$(document).ready(function () {
    searchProduct();
});

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
                    txt += '<div class="col-sm-6 col-md-4"><div class="thumbnail"><img src="'+valeur.link_default_image+'" alt="'+valeur.name.language+'"><div class="caption"><h3>'+valeur.name.language+'</h3><p><a href="#" class="btn btn-primary" role="button" onclick="loadProduct('+valeur.id+', \''+id+'\')" data-dismiss="modal">Sélectionner</a></p></div></div></div>';
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

function loadProduct(idProduct, id){
    $.ajax({
        url: Routing.generate('prestashop_product', {id: idProduct}),
        success: function(result){
            $('#'+id+'idPrestashopProduct').val(result.product.id);
            $('#'+id+'idPrestashopDefaultImage').val(result.product.id_default_image);
            $('#'+id+'name').val(result.product.name.language);
            $('#'+id+'price').val(result.product.price);
            $('#'+id+'priceOld').val(result.product.price_discount);
            $('#'+id+'picture').val(result.product.link_default_image);
        }
    });
}

function doEqualHeight(){
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