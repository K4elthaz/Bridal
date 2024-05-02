$(function() {

    $('#tbl-products').dataTable({
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
    
    $(".select2-create").select2({ dropdownParent: $("#create_modal")});
    $(".select2-edit").select2({ dropdownParent: $("#update_modal")});
    
    $(document).on('click', '.btn-edit-customer', function() {

        $('#edit_modal_full_name').val($(this).data('full-name')).change();
        $('#edit_modal_contact_number').val($(this).data('contact-number'));
        $('#edit_modal_address').text($(this).data('address'))

        $('#edit_modal').modal('toggle');
        $('#edit_modal_form').attr('action', '/customers/'+$(this).attr('id')+'/update');
    });

    $(document).on('click', '.btn-delete-photo', function() {

        var confirmation = confirm("Are you sure you want to delete this photo?");
        if (confirmation) {
            window.location.href = '/photos/' + $(this).data('photo-id') + '/delete';
        } 
    });

    $(document).on('click', '.btn-set-active', function() {

        var confirmation = confirm("Are you sure you want to set this photo as the active photo?");
        if (confirmation) {
            window.location.href = '/photos/' + $(this).data('product-id') + '/' + $(this).data('photo-id') + '/active';
        } 
    });

});
