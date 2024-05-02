<div class="modal fade" role="dialog"  id="sale_modal">
    <div class="modal-dialog modal-dialog-top" role="document">
        <div class="modal-content">
            <form method="post" action="/stocks/{{$product->id}}/update-for-sale">
            @csrf()
                <div class="modal-header">
                    <b class="modal-title bg-pink text-gradient"><i class="fa fa-pen"></i> Edit Stocks For Sale</b>
                    <a class="close text-secondary" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
                </div>
                <div class="modal-body">
                    <div class="col-md-12 mt-1">
                        <label class="text-muted">Quantity </label> <span class="text-danger">&#x2022;</span>
                        <input type="number" step="1" name="quantity" value="{{$product->for_sale}}" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <a type="button" class="btn bg-gradient-dark" data-dismiss="modal">Close</a>
                    <button type="submit" class="btn bg-pink f-black btn-submit">Done</button>
                </div>
            </form>
        </div>
    </div>
</div>