$(function() {

    $('#tbl-customers').dataTable({
        'language':{
            // 'zeroRecords': '<center><span class="badge text-white bg-danger">No Records Found</span></center>',
            "paginate": {
                "previous": "<",
                "next": ">",
            }
        },
        'order': [],
        'scrollX' : (screen_height > screen_width) ? true : false
    });
    
    $(".select2-create").select2({ dropdownParent: $("#create_modal")});
    $(".select2-edit").select2({ dropdownParent: $("#edit_modal")});


    $("#customer_barangay").select2({
        allowClear: true,
        placeholder: "-- Select Barangay --"
    });

    $('#customer_province').on('select2:clearing', function (e) {
        $('#customer_municipality').empty();
        $('#customer_barangay').empty();
    });

    $('#customer_municipality').on('select2:clearing', function (e) {
        $('#customer_barangay').empty();
    });

    var customer_province = $('#customer_province option:selected').val();
    var customer_municipality = $('#customer_municipality option:selected').val();
    
    if(customer_province == null || customer_province == "") {
        $("#customer_province").select2({
            allowClear: true,
            placeholder: "-- Select Province --"
        });
    } else {
        
        $.ajax({
            url: '/get-municipalities/'+customer_province,
            dataType: 'json',
            type: 'get',
            success: function(data) {
                $('#customer_municipality').empty();
                $.each(data, function(index, item) {
                    if(customer_municipality == item.code) {
                        $('#customer_municipality').append('<option value ="'+item.code + '" selected >' +item.name+ '</option>');
                    } else {
                        $('#customer_municipality').append('<option value ="'+item.code + '">' +item.name+ '</option>');
                    }
                });

                $("#customer_municipality").select2({
                    allowClear: true,
                    placeholder: "-- Select Municipality --"
                });
            }
        });
    }

    if(customer_municipality == null || customer_municipality == "") {
        $("#customer_municipality").select2({
            allowClear: true,
            placeholder: "-- Select Municipality/City --"
        });
    } else {
        var customer_barangay = $('#customer_barangay option:selected').val();
        $.ajax({
            url: '/get-barangays/'+customer_municipality,
            dataType: 'json',
            type: 'get',
            success: function(data) {
                $('#customer_barangay').empty();
                $.each(data, function(index, item) {
                    if(customer_barangay == item.code) {
                        $('#customer_barangay').append('<option value ="'+item.code + '" selected >' +item.name+ '</option>');
                    } else {
                        $('#customer_barangay').append('<option value ="'+item.code + '">' +item.name+ '</option>');
                    }
                });

                $("#customer_barangay").select2({
                    allowClear: true,
                    placeholder: "-- Select Barangay --"
                });
            }
        });
    }


    $('#customer_province').on('change', function() {
        $.ajax({
            url: '/get-municipalities/'+$(this).val(),
            dataType: 'json',
            type: 'get',
            success: function(data) {
                $('#customer_municipality').empty();
                $('#customer_barangay').empty();
                $.each(data, function(index, item) {
                    $('#customer_municipality').append('<option value ="'+item.code + '">' +item.name+ '</option>');
                });
                $('#customer_municipality').append('<option value="" selected disabled></option>');
                $("#customer_municipality").select2({
                    allowClear: true,
                    placeholder: "-- Select Municipality/City --"
                });
            }
        });
    });

    $('#customer_municipality').on('change', function() {
        $.ajax({
            url: '/get-barangays/'+$(this).val(),
            dataType: 'json',
            type: 'get',
            success: function(data) {
                $('#customer_barangay').empty();
                $.each(data, function(index, item) {
                    $('#customer_barangay').append('<option value ="'+item.code + '">' +item.name+ '</option>');
                });
                $('#customer_barangay').append('<option value="" selected disabled></option>');
                $("#customer_barangay").select2({
                    allowClear: true,
                    placeholder: "-- Select Barangay --"
                });
            }
        });
    });
    
    $(document).on('click', '.btn-edit-customer', function() {

        $('#edit_modal_first_name').val($(this).data('first-name'));
        $('#edit_modal_middle_name').val($(this).data('middle-name'));
        $('#edit_modal_last_name').val($(this).data('last-name'));
        $('#edit_modal_suffix').val($(this).data('suffix'));

        $('#edit_modal_contact_number').val($(this).data('contact-number'));
        $('#edit_modal_address').text($(this).data('address'))

        $('#edit_modal').modal('toggle');
        $('#edit_modal_form').attr('action', '/customers/'+$(this).attr('id')+'/update');
    });

});
