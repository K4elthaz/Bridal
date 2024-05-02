<div class="modal fade" role="dialog"  id="destroy_modal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form method="post" action="/users/destroy" class="form">
                @csrf()
                <div class="modal-header">
                    <b class="modal-title text-danger text-gradient"><i class="fa fa-trash"></i> Delete User</b>
                    <a class="close text-secondary" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
                </div>
                <div class="modal-body">
                    <center>
                        <img src="/images/delete.gif" alt="" width="100">
                        <h5>Are you sure?</h4>
                        <input type="hidden" id="user_id" name="user_id">    
                        <span class="text-danger destroy-label"></span><br>
                        <label class="text-muted"> Do you really want to delete this record? 
                            <br> This process cannot be undone.
                        </label>
                    </center>
                </div>
                <div class="modal-footer">
                    <a type="button" class="btn btn-secondary" data-dismiss="modal">Close</a>
                    <button type="submit" class="btn bg-gradient-danger btn-submit">DELETE</button>
                </div>
            </form>
        </div>
    </div>
</div>