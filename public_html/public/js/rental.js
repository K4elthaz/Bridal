$(function() {

    $('#tbl-rental').dataTable({
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

    
    $(document).on('click', '.btn-edit', function() {

        $('#edit_modal_transaction_date').val($(this).data('transaction-date'));

        const transactionDate = $('#edit_modal_transaction_date').val();
        
        // Add 3 days to the transaction date
        const dateReturned = new Date(transactionDate);
        dateReturned.setDate(dateReturned.getDate() + 3);
    
        const year = dateReturned.getFullYear();
        let month = dateReturned.getMonth() + 1;
        let day = dateReturned.getDate();
    
        // Pad single-digit months and days with a leading zero
        month = month < 10 ? '0' + month : month;
        day = day < 10 ? '0' + day : day;
    
        // Set the value and minimum date for the end date
        $('#edit_modal_date_returned').val($(this).data('date-returned'));
        $('#edit_modal_date_returned').attr('min', `${year}-${month}-${day}`);

        $('#edit_modal_status').val($(this).data('status')).change();

        $('#edit_modal').modal('toggle');
        
        $('#edit_modal_form').attr('action', '/rental/'+$(this).attr('id')+'/update');

    });

    $('#edit_modal_status').on('change', function() {
        if($(this).val() == "Ongoing" || $(this).val() == "Paid") {
            $('#edit_modal_date_returned').val("");
            $('#edit_modal_date_returned').attr("disabled", true);
        } else {
            $('#edit_modal_date_returned').attr("disabled", false);
        }
    });

});
