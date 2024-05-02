<div class="modal fade" role="dialog"  id="edit_modal">
    <div class="modal-dialog modal-dialog-top" role="document">
        <div class="modal-content">
            <form method="post" action="" class="form" id="edit_modal_form">
                @csrf()
                <div class="modal-header">
                    <b class="modal-title bg-pink text-gradient"><i class="fa fa-pen"></i> Edit</b>
                    <a class="close text-secondary" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
                </div>
                <div class="modal-body">
                    <div class="row" id="edit_body"> 
                        <div class="col-md-12">
                            <label class="bg-pink text-gradient">Rent Information</label><br>
                        </div>
                        <div class="col-md-12">
                            <label class="text-muted">Transaction Date</label> <span class="text-danger">&#x2022;</span>
                            <input type="date" id="edit_modal_transaction_date" class="form-control" disabled />
                        </div>
                        <div class="col-md-12">
                            <label class="text-muted">Date Returned</label>
                            <input type="date" id="edit_modal_date_returned" name="date_returned" class="form-control"  />
                        </div>
                        <div class="col-md-12">
                            <label class="text-muted">Status </label> <span class="text-danger">&#x2022;</span>
                            <select class="form-control select2 select2-edit" id="edit_modal_status" name="status" style="width: 100%" required>
                                <option selected disabled></option>
                                @foreach($statuses as $status)
                                    <option value="{{$status}}">{{$status}}</option>
                                @endforeach
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