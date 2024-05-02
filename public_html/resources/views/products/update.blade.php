<div class="modal fade" role="dialog"  id="update_modal">
    <div class="modal-dialog modal-dialog-top" role="document">
        <div class="modal-content">
            <form method="post" action="/products/{{$product->id}}/update" class="form">
            @csrf()
                <div class="modal-header">
                    <b class="modal-title bg-pink text-gradient"><i class="fa fa-pen"></i> Update Product Information</b>
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
                            <input type="text" name="name" class="form-control" value="{{old('name', $product->name)}}" required />
                        </div>
                        <div class="col-md-12">
                            <label class="text-muted">Description</label> <span class="text-danger">&#x2022;</span>
                            <textarea class="form-control" name="description" rows="3" required>{{old('description', $product->description)}}</textarea>
                        </div>
                        <div class="col-md-12">
                            <label class="text-muted">Category</label> <span class="text-danger">&#x2022;</span>
                            <select class="form-control select2 select2-edit" name="category" style="width: 100%" required>
                                <option selected disabled></option>
                                @foreach($categories as $category => $value)
                                    <option value="{{$value}}" {{ $value == $product->category_id ? 'selected' : '' }}>{{$category}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a type="button" class="btn bg-gradient-dark" data-dismiss="modal">Close</a>
                    <button type="submit" class="btn bg-pink f-black btn-submit">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>