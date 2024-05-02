<div class="modal fade" role="dialog"  id="create_modal">
    <div class="modal-dialog modal-dialog-top" role="document">
        <div class="modal-content">
            <form method="post" action="/users/store" class="form">
                @csrf()
                <div class="modal-header">
                    <b class="modal-title bg-pink text-gradient"><i class="fa fa-plus"></i> Add User</b>
                    <a class="close text-secondary" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
                </div>
                <div class="modal-body">
                    <div class="row" id="create_body"> 
                        <div class="col-md-12">
                            <label class="bg-pink text-gradient">Personal Information</label><br>
                        </div>
                        <div class="col-md-12">
                            <label class="text-muted">Full name</label> <span class="text-danger">&#x2022;</span>
                            <input type="text" name="full_name" class="form-control" value="{{old('full_name')}}" required />
                        </div>
                        <div class="col-md-12 mt-3">
                            <label class="bg-pink text-gradient">Account Information</label>
                            <p style="font-size: 0.75rem" class="text-muted">Note: For every new account the default password is "12345678"</p>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-12">
                                <label class="text-muted">Email</label> <span class="text-danger">&#x2022;</span>
                                <input type="email" class="form-control" name="email" value="{{old('email')}}" required>
                            </div>
                            <label class="text-muted">Classification</label> <span class="text-danger">&#x2022;</span>
                            <select class="form-control select2 select2-create select2-create-classification" name="classification" style="width: 100%" required>
                                <option selected disabled></option>
                                @foreach($user_types as $key => $type)
                                    <option value="{{$type}}">{{$key}}</option>
                                @endforeach
                            </select>
                        </div>    

                    </div>
                </div>
                <div class="modal-footer">
                    <a type="button" class="btn bg-gradient-dark" data-dismiss="modal">Close</a>
                    <button type="submit" class="btn bg-pink f-black btn-submit" onclick="return confirm('Are you sure you want to add this user?')">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>