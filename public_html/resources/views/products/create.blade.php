<div class="modal fade" role="dialog"  id="create_modal">
    <div class="modal-dialog modal-dialog-top" role="document">
        <div class="modal-content">
            <form method="post" action="/products/store" class="form">
            @csrf()
                <div class="modal-header">
                    <b class="modal-title bg-pink text-gradient"><i class="fa fa-plus"></i> Add Product</b>
                    <a class="close text-secondary" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
                </div>
                <div class="modal-body">
                    <div class="row" id="create_body"> 
                        <div class="col-md-12">
                            <label class="bg-pink text-gradient">Product Information</label><br>
                        </div>
                        <div class="col-md-12">
                            <label class="text-muted">Name</label> <span class="text-danger">&#x2022;</span>
                            <input type="text" name="name" class="form-control" value="{{old('name')}}" required />
                        </div>
                        <div class="col-md-12">
                            <label class="text-muted">Description</label> <span class="text-danger">&#x2022;</span>
                            <textarea class="form-control" name="description" rows="3" required>{{old('description')}}</textarea>
                        </div>
                        <div class="col-md-12">
                            <label class="text-muted">Category</label> <span class="text-danger">&#x2022;</span>
                            <select class="form-control select2 select2-create select2-create" name="category" style="width: 100%" required>
                                <option selected disabled></option>
                                @foreach($categories as $category => $value)
                                    <option value="{{$value}}">{{$category}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-12">
                            <label class="text-muted">Sale Price (₱)</label> <span class="text-danger">&#x2022;</span>
                            <input type="number" min="1" step="any" name="sale_price" class="form-control" value="{{old('sale_price')}}" required />
                        </div>

                        <div class="col-md-12">
                            <label class="text-muted">Rent Price (₱)</label> <span class="text-danger">&#x2022;</span>
                            <input type="number" min="1" step="any" name="rent_price" class="form-control" value="{{old('rent_price')}}" required />
                        </div>

                        <div class="col-md-12">
                            <label class="text-muted">Damage Deposit (₱)</label> <span class="text-danger">&#x2022;</span>
                            <input type="number" min="1" step="any" name="damage_deposit" class="form-control" value="{{old('damage_deposit')}}" required />
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <a type="button" class="btn bg-gradient-dark" data-dismiss="modal">Close</a>
                    <button type="submit" class="btn bg-pink f-black btn-submit" onclick="return confirm('Are you sure you want to add this product?')">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>