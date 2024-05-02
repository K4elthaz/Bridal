<div class="modal fade" role="dialog"  id="edit_modal">
    <div class="modal-dialog modal-dialog-top" role="document">
        <div class="modal-content">
            <form method="post" action="" class="form" id="edit_modal_form">
                @csrf()
                <div class="modal-header">
                    <b class="modal-title bg-pink text-gradient"><i class="fa fa-pen"></i> Edit User</b>
                    <a class="close text-secondary" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
                </div>
                <div class="modal-body">
                    <div class="row" id="edit_body"> 
                        <div class="col-md-12">
                            <label class="bg-pink text-gradient">Personal Information</label><br>
                        </div>
                        <div class="col-md-12">
                            <label class="text-muted">Full name</label> <span class="text-danger">&#x2022;</span>
                            <input type="text" name="full_name" id="edit_modal_full_name" class="form-control" required />
                        </div>
                        <div class="col-md-12 mt-3">
                            <label class="bg-pink text-gradient">Account Information</label>
                        </div>
                        <div class="col-md-12">
                            <label class="text-muted">Email</label> <span class="text-danger">&#x2022;</span>
                            <input type="email" class="form-control" name="email" id="edit_modal_email" required>

                            <label class="text-muted">Classification</label> <span class="text-danger">&#x2022;</span>
                            <select class="form-control select2  select2-edit" name="classification" id="edit_modal_classification" style="width: 100%" required>
                                <option selected disabled></option>
                                @foreach($user_types as $type => $value)
                                    <option value="{{$value}}">{{ $type }}</option>
                                @endforeach
                            </select>
                            <label class="text-muted">Status</label> <span class="text-danger">&#x2022;</span>
                            <select class="form-control select2 select2-edit" name="status" id="edit_modal_status" style="width: 100%" required>
                                <option selected disabled></option>
                                <option value="1">ACTIVE</option>
                                <option value="2">INACTIVE</option>
                            </select>
                            <label class="text-muted">Reset password to default? </label> <span class="text-danger">&#x2022;</span>
                            <select class="form-control select2 select2-edit" name="reset_password" style="width: 100%" required>
                                <option selected disabled></option>
                                <option value="no" selected>NO</option>
                                <option value="yes">YES</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a type="button" class="btn bg-gradient-dark" data-bs-dismiss="modal">Close</a>
                    <button type="submit" class="btn bg-pink f-black btn-submit">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>