$(function() {

    $('#tbl-users').dataTable({
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
    $(".select2-edit").select2({ dropdownParent: $("#edit_modal")});
    
    $(document).on('click', '.btn-edit-user', function() {

        $('#edit_modal_full_name').val($(this).data('full-name')).change();
        $('#edit_modal_email').val($(this).data('email'));
        $('#edit_modal_classification').val($(this).data('classification')).change();
        $('#edit_modal_status').val($(this).data('status')).change();

        $('#edit_modal').modal('toggle');
        $('#edit_modal_form').attr('action', '/users/'+$(this).attr('id')+'/update');
    });

});
