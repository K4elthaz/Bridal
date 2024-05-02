<div class="modal fade" role="dialog"  id="upload_modal">
    <div class="modal-dialog modal-dialog-top" role="document">
        <div class="modal-content">
            <form method="post" action="/photos/{{$product->id}}/store" enctype="multipart/form-data">
            @csrf()
                <div class="modal-header">
                    <b class="modal-title bg-pink text-gradient"><i class="fa fa-upload"></i> Upload File</b>
                    <a class="close text-secondary" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
                </div>
                <div class="modal-body">
                    <div class="col-md-12 mt-1">
                        <label class="text-muted">Files (JPG & PNG only) </label> <span class="text-danger">&#x2022;</span>
                        <input type="file" 
                        accept="image/jpeg, image/png, image/jpg"
                        name="files[]" multiple class="form-control" name="location" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <a type="button" class="btn bg-gradient-dark" data-dismiss="modal">Close</a>
                    <button type="submit" class="btn bg-pink f-black btn-submit" onclick="return confirm('Are you sure you want to add this photo?')">Done</button>
                </div>
            </form>
        </div>
    </div>
</div>