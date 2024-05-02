$(function() {

    $('#tbl-transactions').dataTable({
        'order': [],
        'language':{
            // 'zeroRecords': '<center><span class="badge text-white bg-danger">No Records Found</span></center>',
            "paginate": {
                "previous": "<",
                "next": ">",
            }
        },
        'scrollX' : (screen_height > screen_width) ? true : false
    });
    
    $(".select2-create").select2();
    $(".select2-edit").select2({ dropdownParent: $("#update_modal")});


    var selected_products = [];

    $('#tbl-transactions').on('click', '.btn-product', function() {

        var found = $.inArray($(this).attr('id'), selected_products);
        if (found < 0) {
            
            selected_products.push($(this).attr('id'));
            $(this).hide();

            var rent_input = $(this).data('available-for-rent') > 0 ? '' : 'disabled';
            var sale_input = $(this).data('for-sale') > 0 ? '' : 'disabled';

            var row = '<div class="card mb-3 new-product">'+
                '<div class="card-body">'+
                    '<div class="row mb-2">'+
                        '<div class="col-md-12" align="right">'+
                            '<i class="fa fa-times btn-remove-product" data-productid="'+$(this).attr('id')+'"></i>'+
                        '</div>'+
                    '</div>'+
                    '<div class="row">'+
                        '<div class="col-md-3">'+
                            '<img src="/storage/products/'+$(this).data('photo')+'"  width="100%" alt="Product Photo">' +
                        '</div>'+
                        '<div class="col-md-3">'+
                            '<h6 class="mb-0">'+$(this).data('name')+'</h6>'+
                            '<small> Sale Price: '+$(this).data('sale-price2')+'</small><br>'+
                            '<small>Rent Price: '+$(this).data('rent-price2')+'</small><br>'+
                            '<small>Damage Deposit: '+$(this).data('damage-deposit2')+'</small><br><br>'+
                            '<small>'+$(this).data('description').replace(/\n/g, '<br>')+'</small>'+
                        '</div>'+
                        
                        '<div class="col-md-3">'+
                            '<div class="card bg-gradient-dark">'+
                                '<div class="mt-3" align="center">'+
                                    '<div class="icon icon-shape icon-lg bg-pink  shadow text-center border-radius-lg">'+
                                        '<i class="ni ni-cart mt-2 opacity-10" aria-hidden="true"></i>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="card-body pt-0 p-3 text-center">'+
                                    '<h6 class="text-center text-white mb-0">FOR RENT</h6>'+
                                    '<span class="text-xs text-white">Available Quantity</span>'+
                                    '<hr class="horizontal dark my-2 bg-white">'+
                                    '<h5 class="mb-0 text-white">'+$(this).data('available-for-rent')+'</h5>'+
                                '</div>'+
                            '</div>'+
                            '<div class="mt-1">'+
                                '<label>Quantity</label>'+
                                '<input type="number" class="form-control input-for-rent" name="products['+$(this).attr('id')+']['+"rent"+']" min="0" max="'+$(this).data('available-for-rent')+'" '+rent_input+'>'+
                            '</div>'+
                        '</div>'+
                        '<div class="col-md-3">'+
                            '<div class="card bg-gradient-dark">'+
                                '<div class="mt-3" align="center">'+
                                    '<div class="icon icon-shape icon-lg bg-pink shadow text-center border-radius-lg">'+
                                        '<i class="ni ni-money-coins mt-2 opacity-10" aria-hidden="true"></i>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="card-body pt-0 p-3 text-center">'+
                                    '<h6 class="text-center text-white mb-0">FOR SALE</h6>'+
                                    '<span class="text-xs text-white">Available Quantity</span>'+
                                    '<hr class="horizontal dark my-2 bg-white">'+
                                    '<h5 class="mb-0 text-white">'+$(this).data('for-sale')+'</h5>'+
                                '</div>'+
                            '</div>'+
                            '<div class="mt-1">'+
                                '<label>Quantity</label>'+
                                '<input type="number" class="form-control" name="products['+$(this).attr('id')+']['+"sale"+']" min="0" max="'+$(this).data('for-sale')+'" '+sale_input+'>'+
                            '</div>'+
                        '</div>'+
                    '</div>'+
                '</div>'+
            '</div>';

            if(selected_products.length > 0) {
                $('#transaction-form').css('display', 'block');
            }

            $('#selected-products').append(row);
            $('html, body').animate({
                scrollTop: $('#selected-products').offset().top + $('#selected-products').height()
            }, 500);
        }
        
    });

    $(document).on('click', '.btn-remove-product', function() {

        var v = $(this).data('productid');
        selected_products = $.grep(selected_products, function(value) {
            return value != v;
        });

        $('.td-center').prop('align', 'center');
        
        $('#'+v).show();
        $(this).closest('.new-product').remove();
        if(selected_products.length < 1) {
            $('#transaction-form').css('display', 'none');
        }
    });

    $('#create-transaction-form').submit(function (e) {
        // Check if any input with class input-for-rent has a value greater than zero
        var hasValueGreaterThanZero = false;

        $('.input-for-rent').each(function () {
            var inputValue = parseFloat($(this).val());

            if (!isNaN(inputValue) && inputValue > 0) {
                hasValueGreaterThanZero = true;
                return false; // Exit the loop early since we found a value greater than zero
            }
        });

        // If a value greater than zero is found, require scheduled_date
        if (hasValueGreaterThanZero) {
            if($('#scheduled_return_date').val() == "") {
                $('#scheduled_return_date').attr('required', true);
                e.preventDefault();
            }
        } else {
            $('#scheduled_return_date').attr('required', false);
        }
    });


    $(document).on('mouseenter', '#btn-save-transaction', function () {
        // Check if any input with class input-for-rent has a value greater than zero
        var hasValueGreaterThanZero = false;

        $('.input-for-rent').each(function () {
            var inputValue = parseFloat($(this).val());

            if (!isNaN(inputValue) && inputValue > 0) {
                hasValueGreaterThanZero = true;
                return false; // Exit the loop early since we found a value greater than zero
            }
        });

        // If a value greater than zero is found, require scheduled_date
        if (hasValueGreaterThanZero) {
            if($('#scheduled_return_date').val() == "") {
                $('#scheduled_return_date').attr('required', true);
            }
        } else {
            $('#scheduled_return_date').attr('required', false);
        }
    });
});
