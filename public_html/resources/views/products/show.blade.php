@extends('layouts.master')
@section('page_name', $page['name'])
@section('page_script')
    <script type="text/javascript" src="/js/products.js"></script>
@endsection
@section('page_css')

@endsection

@section('content')

    <div class="col-md-12">
        @include('layouts.message')
    </div>

    <div class="row">
        <div class="col-lg-4 mb-3">
            <div class="card">
                <div class="card-header pb-0 px-3">
                    <div class="row">
                        <div class="col-6 d-flex align-items-center">
                            <h6 class="mb-0">Photos</h6>
                        </div>
                        @if(Auth::user()->classification_id == 1)
                            <div class="col-6 text-end">
                                <a href="#" class="icon icon-shape icon-sm shadow border-radius-md bg-gradient-dark
                                    text-center align-items-center justify-content-center trigger-modal" data-toggle="modal" data-target="#upload_modal">
                                    <i class="fa fa-plus"></i>
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="card-body pt-4 p-3">
                    <ul class="list-group">
                        @foreach($photos as $photo)
                            <li class="list-group-item border-0 bg-gray-100 border-radius-lg mb-3">
                                <div class="row">
                                    <div class="col-md-8">
                                        <img src="{{ asset('storage/products/' . $photo->filename) }}" width="190" alt="image">
                                    </div>
                                    @if(Auth::user()->classification_id == 1)
                                        <div class="col-md-4 mt-1" align="left">
                                            @if($photo->status == 0)
                                                <a href="#" data-photo-id="{{$photo->id}}" class="icon icon-shape icon-sm shadow border-radius-md bg-gradient-danger
                                                    text-center align-items-center justify-content-center btn-delete-photo">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                                <a href="#" data-product-id="{{$product->id}}" data-photo-id="{{$photo->id}}" class="icon icon-shape icon-sm shadow border-radius-md bg-pink
                                                    text-center align-items-center justify-content-center btn-set-active">
                                                    <i class="fa fa-check f-black"></i>
                                                </a>
                                            @endif
                                        </div>    
                                    @endif
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="card">
                        <div class="card-header pb-0 p-3">
                            <h6 class="mb-0 trigger-modal" data-toggle="modal" data-target="#update_modal">{{ $product->name }}</h6>
                            <small class="mb-0">{{ $product->description }}</small>
                        </div>
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-md-4 ">
                                    <div class="card card-body border bg-pink f-black border-radius-lg d-flex align-items-center flex-row trigger-modal" data-toggle="modal" data-target="#price_modal">
                                        <small>Sale Price: </small>
                                        <h6 class="mb-0 f-black">&nbsp;₱ {{ number_format($product->sale_price, 2) }}</h6>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card card-body border bg-pink f-black border-radius-lg d-flex align-items-center flex-row trigger-modal" data-toggle="modal" data-target="#price_modal">
                                        <small>Rent Price: </small>
                                        <h6 class="mb-0 f-black">&nbsp;₱ {{ number_format($product->rent_price, 2) }}</h6>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card card-body border bg-pink f-black border-radius-lg d-flex align-items-center flex-row trigger-modal" data-toggle="modal" data-target="#price_modal">
                                        <small>Damage Deposit: </small>
                                        <h6 class="mb-0 f-black">&nbsp;₱ {{ number_format($product->damage_deposit, 2) }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-sm-6 mt-3">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-capitalize font-weight-bold">For Sale</p>
                                        <h5 class="font-weight-bolder mb-0">
                                            {{ $product->for_sale }}
                                            {{-- <span class="text-success text-sm font-weight-bolder">+55%</span> --}}
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div class="icon icon-shape bg-gradient-dark shadow text-center border-radius-md">
                                        <i class="ni ni-money-coins text-lg opacity-10 trigger-modal" data-toggle="modal" data-target="#sale_modal" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-sm-6 mt-3">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-capitalize font-weight-bold">For Rent</p>
                                        <h5 class="font-weight-bolder mb-0">
                                            {{ $product->for_rent }}
                                            {{-- <span class="text-success text-sm font-weight-bolder">+55%</span> --}}
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div class="icon icon-shape bg-gradient-dark shadow text-center border-radius-md">
                                        <i class="fa fa-tshirt text-lg opacity-10 trigger-modal" data-toggle="modal" data-target="#rent_modal" aria-hidden="true"></i>
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
        
                <div class="col-xl-4 col-sm-6 mt-3">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Out for Rent</p>
                                        <h5 class="font-weight-bolder mb-0">
                                            {{ $product->for_rent - $product->available_for_rent }}
                                            {{-- <span class="text-success text-sm font-weight-bolder">+55%</span> --}}
                                        </h5>
                                    </div>
                                </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-dark shadow text-center border-radius-md">
                                    <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <div class="col-12 mt-3">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6 class="mb-0">Transactions</h6>
                    </div>
                    <div class="card-body">
                        <table class="table align-items-center mb-0" id="tbl-products" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th width="10%" class="text-uppercase text-dark text-xxs font-weight-bolder ps-2">Transaction No.</th>
                                    <th class="text-uppercase text-dark text-xxs font-weight-bolder ps-2">Customer</th>
                                    <th width="23%"class="text-uppercase text-dark text-xxs font-weight-bolder ps-2">Date</th> 
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($transactions as $t)
                                    <tr>
                                        <td data-label="Transaction No" class="align-middle header with-label">
                                            <span class="text-xs">
                                                <a class="text-gradient bg-pink" href="/transactions/{{$t->id}}/show">{{ $t->id }}</a>
                                            </span>
                                        </td>
                                        <td data-label="Full Name" class="align-middle header with-label">
                                            <span class="text-xs">
                                                {!! Helper::nameFormat($t->first_name, $t->middle_name, $t->last_name, $t->suffix) !!}
                                            </span>
                                        </td>
                                        <td data-label="Transaction No" class="align-middle header with-label">
                                            <span class="text-xs">
                                                {{ date_format(date_create($t->transaction_date), 'M. j, Y') }} 
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    @if(Auth::user()->classification_id == 1)
        @include('products.upload-photo')
        @include('products.update')
        @include('products.rent')
        @include('products.sale')
        @include('products.price')
    @endif
@endsection