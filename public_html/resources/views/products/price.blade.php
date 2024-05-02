<div class="modal fade" role="dialog"  id="price_modal">
    <div class="modal-dialog modal-dialog-top" role="document">
        <div class="modal-content">
            <form method="post" action="/prices/{{$product->id}}/update">
            @csrf()
                <div class="modal-header">
                    <b class="modal-title bg-pink text-gradient"><i class="fa fa-pen"></i> Edit Product Price</b>
                    <a class="close text-secondary" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
                </div>
                <div class="modal-body">
                    <div class="col-md-12 mt-1">
                        <label class="text-muted">Sale Price  (₱) </label> <span class="text-danger">&#x2022;</span>
                        <input type="number" min="1" step="any" name="sale_price" value="{{$product->sale_price}}" class="form-control" required>
                    </div>
                    <div class="col-md-12 mt-1">
                        <label class="text-muted">Rent Price  (₱) </label> <span class="text-danger">&#x2022;</span>
                        <input type="number" min="1" step="any" name="rent_price" value="{{$product->rent_price}}" class="form-control" required>
                    </div>
                    <div class="col-md-12 mt-1">
                        <label class="text-muted">Damage Deposit  (₱)</label> <span class="text-danger">&#x2022;</span>
                        <input type="number" min="1" step="any" name="damage_deposit" value="{{$product->damage_deposit}}" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <a type="button" class="btn bg-gradient-dark" data-dismiss="modal">Close</a>
                    <button type="submit" class="btn bg-pink btn-submit f-black">Done</button>
                </div>
            </form>
        </div>
    </div>
</div>