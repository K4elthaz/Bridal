<div class="modal fade" role="dialog"  id="edit_modal">
    <div class="modal-dialog modal-dialog-top" role="document">
        <div class="modal-content">
            <form method="post" action="" class="form" id="edit_modal_form" enctype="multipart/form-data">
                @csrf()
                <div class="modal-header">
                    <b class="modal-title bg-pink text-gradient"><i class="fa fa-pen"></i> Edit Customer</b>
                    <a class="close text-secondary" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
                </div>
                <div class="modal-body">
                    <div class="row" id="create_body"> 
                        <div class="col-md-12">
                            <label class="bg-pink text-gradient">Personal Information</label><br>
                        </div>
                        <div class="col-md-6">
                            <label class="text-muted">First Name</label> <span class="text-danger">&#x2022;</span>
                            <input type="text" name="first_name" class="form-control" id="edit_modal_first_name" required />
                        </div>
                        <div class="col-md-6">
                            <label class="text-muted">Middle Name</label>
                            <input type="text" name="middle_name" class="form-control" id="edit_modal_middle_name" />
                        </div>
                        <div class="col-md-6">
                            <label class="text-muted">Last Name</label> <span class="text-danger">&#x2022;</span>
                            <input type="text" name="last_name" class="form-control" id="edit_modal_last_name" required />
                        </div>
                        <div class="col-md-6">
                            <label class="text-muted">Suffix</label>
                            <input type="text" name="suffix" class="form-control" id="edit_modal_suffix" />
                        </div>

                        <div class="col-md-12">
                            <label class="text-muted">Contact number</label> <span class="text-danger">&#x2022;</span>
                            <input type="text" class="form-control" name="contact_number" id="edit_modal_contact_number" required>
                        </div>

                        <div class="col-md-12">
                            <label class="text-muted">Province</label> <span class="text-danger">&#x2022;</span>
                            <select class="form-control select2 select2-create" id="customer_province" name="province" required>
                                <option selected disabled></option>
                                @if(old('province'))
                                    @foreach($provinces as $p)
                                        <option value="{{$p->code}}" {{($p->code == old('province')) ? 'selected' : ''}}>{{$p->name}}</option>
                                    @endforeach
                                @else
                                    @foreach ($provinces as $p)
                                        <option value="{{$p->code}}" {{ $p->code == $customer->province_id ? 'selected' : '' }}>{{strtoupper($p->name)}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label class="text-muted">Municipality</label> <span class="text-danger">&#x2022;</span>
                            <select class="form-control select2 select2-create" id="customer_municipality" name="municipality" required>
                                @if(old('municipality'))
                                    <option value="{{old('municipality')}}" selected>{{old('municipality')}}</option>
                                @else
                                    <option value="{{$customer->municipality_id}}" selected>{{$customer->municipality_id}}</option>
                                @endif
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label class="text-muted">Barangay</label> <span class="text-danger">&#x2022;</span>
                            <select class="form-control select2 select2-create" id="customer_barangay" name="barangay" required>
                                @if(old('barangay'))
                                    <option value="{{old('barangay')}}" selected>{{old('barangay')}}</option>
                                @else
                                <option value="{{$customer->barangay_id}}" selected>{{$customer->barangay_id}}</option>
                                @endif
                            </select>
                        </div>

                        <div class="col-md-12">
                            <label class="text-muted">Address</label> <span class="text-danger">&#x2022;</span>
                            <textarea class="form-control" name="address" rows="2" id="edit_modal_address" required></textarea>
                        </div>

                        <div class="col-md-12">
                            <label class="text-muted">Profile Picture (JPG & PNG only) </label> 
                            <input type="file" 
                            accept="image/jpeg, image/png, image/jpg"
                            name="profile_picture" multiple class="form-control" >
                        </div>

                        <div class="col-md-12">
                            <label class="text-muted">ID Picture (JPG & PNG only) </label> 
                            <input type="file" 
                            accept="image/jpeg, image/png, image/jpg"
                            name="id_picture" multiple class="form-control" >
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