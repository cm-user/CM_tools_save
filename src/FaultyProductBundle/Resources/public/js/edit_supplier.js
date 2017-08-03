// Cette partie js est disponible uniquement pour la partie edit des defectueux
// Elle permet de charger à nouveau la liste des fournisseurs
// Ainsi l'utilisateur pourra changer le fournisseur si besoin

$('document').ready(function(){

    var idPresta = $('#faulty_edit_product_idPrestashopProduct').val(); //recupére l'id prestashop de l'input

    loadProduct(idPresta);

    function loadProduct(idProduct){

        var id = $('form > div').attr('id')+'_product_';

        $.ajax({

            url: Routing.generate('faulty_prestashop_product', {id: idProduct}),

            success: function(result){

                // $('#'+id+'name').val(result.product.name.language);
                //
                // $('#'+id+'idPrestashopProduct').val(result.product.id);
                //
                // $('#'+id+'link').val(result.product.link);
                //
                // $('#'+id+'costPrice').val(result.product.wholesale_price);


                list_suppliers = result.product.suppliers;


                var tab_suppliers_reverse = result.product.suppliers.reverse(); //tableau qui contiendra tous les objets suppliers

                // il est inversé afin de proposer le fournisseur le plus récent par défaut

                $('#'+id+'supplier_name').empty(); //vide l'ancien fournisseur pour une liste plus claire

                $.each(tab_suppliers_reverse, function (i, item) {

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

                    $.each(tab_suppliers_reverse, function(i, item){

                        if(item.name == value){

                            $('#'+id+'supplier_idPrestashopSupplier').val(item.id_supplier);

                            $('#'+id+'supplierReference').val(item.product_supplier_reference);

                        }

                    });

                });



            }

        });

    }
});