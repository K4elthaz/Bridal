@extends('layouts.master')
@section('page_name', $page['name'])
@section('page_script')
    <script type="text/javascript" src="/js/transactions.js"></script>
    <script type="text/javascript">
        $(function() {
            $('.product-status').change(function() {
                if ($(this).val() == 'Returned' || $(this).val() == 'Returned with damage') {
                    $(this).closest('div').find('.product-date-returned').attr('required', true);
                } else {
                    $(this).closest('div').find('.product-date-returned').attr('required', false);
                    $(this).closest('div').find('.product-date-returned').val('');
                }
            });
        });
    </script>
    <script>

        updateScheduledReturnDate();

        function updateScheduledReturnDate() {
            const transactionDate = $('#transaction_date').val();
        
            // Add 3 days to the transaction date
            const scheduledReturnDate = new Date(transactionDate);
            scheduledReturnDate.setDate(scheduledReturnDate.getDate() + 3);
        
            const year = scheduledReturnDate.getFullYear();
            let month = scheduledReturnDate.getMonth() + 1;
            let day = scheduledReturnDate.getDate();
        
            // Pad single-digit months and days with a leading zero
            month = month < 10 ? '0' + month : month;
            day = day < 10 ? '0' + day : day;
        
            // Set the minimum date for the end date
            $('#scheduled_return_date').attr('min', `${year}-${month}-${day}`);

            $('.product-date-returned').each(function () {
                // Inside the callback function, 'this' refers to the current element in the iteration
                $(this).attr('min', `${year}-${month}-${day}`);
            });
        }
    
        // Set the default value and minimum date for the end date to 3 days after the start date
        $('#transaction_date').on('input', function() {
            updateScheduledReturnDate();
        });
    </script>
@endsection
@section('page_css')

@endsection

@section('content')

    <form action="/transactions/{{$transaction->id}}/update" method="POST">
    @csrf
        <div class="row">
            
            <div class="col-md-12">
                @include('layouts.message')
            </div>

            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <div class="row">
                            <div class="col-md-10">
                                <h6>Transaction Information</h6> <span class="badge badge-sm bg-gradient-secondary">{{$transaction->status}}</span>
                            </div>

                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Customer</label>
                                <select class="form-control select2 select2-create" name="customer" required>
                                    <option selected disabled></option>
                                    @foreach($customers as $customer)
                                        <option value="{{$customer->id}}" {{$customer->id == $transaction->customer_id ? 'selected' : ''}}>{!! Helper::nameFormat($customer->first_name, $customer->middle_name, $customer->last_name, $customer->suffix) !!}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label>Transaction Date</label>
                                <input type="date" class="form-control" id="transaction_date" name="transaction_date" value="{{$transaction->transaction_date}}" required>
                            </div>
                            @if($for_rent > 0)
                                <div class="col-md-3">
                                    <label>Scheduled Return Date</label>
                                    <input type="date" class="form-control" id="scheduled_return_date" name="scheduled_return_date" value="{{ ($transaction->scheduled_return_date != "") ? $transaction->scheduled_return_date : ''}}" required>
                                </div>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>

        @foreach($products as $product)
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{ asset('storage/products/' . $product->filename) }}"  width="100%" alt="Product Photo">
                        </div>
                        <div class="col-md-5">
                            <h6 class="mb-0">{{$product->name}}</h6>
                            @if($product->type == 'sale')
                                <small> Sale Price: ₱ {{ number_format($product->sale_price, 2) }}</small><br><br>
                            @else
                                <small>Rent Price: ₱ {{ number_format($product->rent_price, 2) }}</small><br>
                                <small>Damage Deposit: ₱ {{ number_format($product->damage_deposit, 2) }}</small><br>
                                <small>Delayed Return Fee: ₱ 500.00</small><br><br>
                            @endif
                            <small class="description">{!! nl2br($product->description) !!}</small>
                        </div>
                        @if($product->type == 'rent')
                            <div class="col-md-3">
                                <div class="card bg-gradient-dark">
                                    <div class="mt-3" align="center">
                                        <div class="icon icon-shape icon-lg bg-pink  shadow text-center border-radius-lg">
                                            <i class="fa fa-tshirt opacity-10" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="card-body pt-1 p-3 text-center">
                                        <h6 class="text-center text-white mb-0">FOR RENT</h6>
                                        <h5 class="mb-0 text-white"></h5>
                                    </div>
                                </div>
                                <div class="mt-1">
                                    <label>Date Returned</label>
                                    <input type="date" class="form-control product-date-returned" name="date_returned[{{$product->id}}]" value="{{ implode(',', (array) old('date_returned.' . $product->id, $product->date_returned != '' ? $product->date_returned : ''))  }}">
                                    <label>Status</label>
                                    <select class="form-control select2 select2-create product-status" name="status[{{$product->id}}]" required>
                                        @foreach($types as $type)
                                            @if( implode(',', (array) old('status.' . $product->id)) )
                                                <option value="{{$type}}" {{ implode(',', (array) old('status.' . $product->id)) == $type ? 'selected' : '' }}>{{$type}}</option>
                                            @else
                                                <option value="{{$type}}" {{ $type == $product->status ? 'selected' : '' }}>{{$type}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        @else
                            <div class="col-md-3">
                                <div class="card bg-gradient-dark">
                                    <div class="mt-3" align="center">
                                        <div class="icon icon-shape icon-lg bg-pink shadow text-center border-radius-lg">
                                            <i class="ni ni-money-coins mt-2 opacity-10" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="card-body pt-1 p-3 text-center">
                                        <h6 class="text-center text-white mb-0">FOR SALE</h6>
                                        <h5 class="mb-0 text-white"></h5>
                                    </div>
                                </div>
                                <div class="mt-1">
                                    <label>Quantity</label>
                                    <input type="text" class="form-control" value="{{$product->quantity}}" disabled>
                                    <label>Status</label>
                                    <input type="text" class="form-control" value="{{$product->status}}" disabled>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach

        <div class="col-md-12" align="center" style="margin-bottom: 30px">
            <button type="submit" class="btn bg-gradient-dark">SAVE CHANGES</button>
        </div>
    </form>
@endsection