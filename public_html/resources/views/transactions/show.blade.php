@extends('layouts.master')
@section('page_name', $page['name'])
@section('page_script')

@endsection
@section('page_css')

@endsection

@section('content')

    <div class="row">
        
        <div class="col-md-12">
            @include('layouts.message')
        </div>

        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Transaction Information</h6> 
                            @if($transaction->status == "Ongoing")
                                <span class="badge badge-sm bg-gradient-secondary">{{$transaction->status}}</span>
                            @elseif($transaction->status == "Incomplete")
                                <span class="badge badge-sm bg-pink">{{$transaction->status}}</span>
                            @else
                                <span class="badge badge-sm bg-gradient-success">{{$transaction->status}}</span>
                            @endif
                        </div>
                        <div class="col-md-6 text-end">
                            <a href="/transactions/{{$transaction->id}}/edit" class="btn btn-sm bg-gradient-dark pl-0">
                                <i class="fa fa-pen"></i> Edit
                            </a>
                            <a href="/transactions/{{$transaction->id}}/initial-receipt" target="_blank" class="btn btn-sm bg-gradient-dark pl-0">
                                <i class="fa fa-file"></i> Receipt
                            </a>
                            @if($transaction->status == "Completed")
                                <a href="/transactions/{{$transaction->id}}/final-receipt" target="_blank" class="btn btn-sm bg-gradient-dark pl-0">
                                    <i class="fa fa-file"></i> Updated Receipt
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <label>Customer</label>
                            <input type="text" class="form-control" value="{!! Helper::nameFormat($transaction->first_name, $transaction->middle_name, $transaction->last_name, $transaction->suffix) !!}" disabled>
                        </div>
                        <div class="col-md-3">
                            <label>Transaction Date</label>
                            <input type="text" class="form-control" value="{{date_format(date_create($transaction->transaction_date), 'F j, Y')}}" disabled>
                        </div>
                        <div class="col-md-3">
                            <label>Scheduled Return Date</label>
                            <input type="text" class="form-control" value="{{ ($transaction->scheduled_return_date != "") ? date_format(date_create($transaction->scheduled_return_date), 'F j, Y') : ''}}" disabled>
                        </div>
                        {{-- <div class="col-md-2">
                            <label>Total</label>
                            <input type="text" class="form-control" value="₱ {{number_format($grand_total, 2)}}" disabled>
                        </div> --}}
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
                                <input type="text" class="form-control" value="{{$product->date_returned != "" ? date_format(date_create($product->date_returned), 'F j, Y') : ''}}" disabled>
                                <label>Status</label>
                                <input type="text" class="form-control" value="{{$product->status}}" disabled>
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
    
@endsection