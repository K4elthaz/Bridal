@extends('layouts.master')
@section('page_name', $page['name'])
@section('page_script')
    <script type="text/javascript" src="/js/products.js"></script>
@endsection
@section('page_css')

@endsection

@section('content')

    <div class="row">
        
        <div class="col-md-12">
            @if(Auth::user()->classification_id == 1)
                <a href="#" class="btn bg-pink f-black trigger-modal btn-md" data-toggle="modal" data-target="#create_modal">
                    <i class="fa fa-plus"></i> Add Product
                </a>
            @endif
            
            <button class="btn bg-gradient-dark" data-toggle="modal" data-target="#download_modal"><i class="fa fa-download"></i> Download</button>

            @include('layouts.message')
        </div>

        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Products Table</h6>
                </div>
                <div class="card-body">
                    <table class="table align-items-center mb-0" id="tbl-products" style="width: 100%;">
                        <thead>
                            <tr>
                                <th width="10%" class="text-uppercase text-dark text-xxs font-weight-bolder ps-2">Product No.</th>
                                <th width="15%" class="text-uppercase text-dark text-xxs font-weight-bolder ps-2">Name</th>
                                <th  class="text-uppercase text-dark text-xxs font-weight-bolder ps-2">Description</th>
                                <th width="9%" class="text-uppercase text-dark text-xxs font-weight-bolder ps-2">Category</th>
                                <th width="9%" class="text-uppercase text-dark text-xxs font-weight-bolder ps-2">For Sale</th>
                                <th width="9%" class="text-uppercase text-dark text-xxs font-weight-bolder ps-2">For Rent</th>
                                <th width="9%" class="text-uppercase text-dark text-xxs font-weight-bolder ps-2">Sale Price</th> 
                                <th width="9%" class="text-uppercase text-dark text-xxs font-weight-bolder ps-2">Rent Price</th> 
                                {{-- <th width="11%"class="text-uppercase text-dark text-xxs font-weight-bolder ps-2">Rental Deposit</th>  --}}
                                <th width="11%" class="text-center text-uppercase text-dark text-xxs font-weight-bolder">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td data-label="ID" class="align-middle header with-label">
                                        <span class="text-xs">
                                            {{ $product->id }} 
                                        </span>
                                    </td>
                                    <td data-label="Name" class="align-middle header with-label">
                                        <span class="text-xs">
                                            {{ $product->name }} 
                                        </span>
                                    </td>
                                    <td data-label="Description" class="align-middle header with-label">
                                        <span class="text-xs">
                                            {{ $product->description }} 
                                        </span>
                                    </td>
                                    <td data-label="Category" class="align-middle header with-label">
                                        <span class="text-xs">
                                            @if($product->category_id == 1)
                                                {{ "MEN'S" }}
                                            @elseif($product->category_id == 2)
                                                {{ "WOMEN'S" }}
                                            @else
                                                {{ "KID'S" }}
                                            @endif
                                        </span>
                                    </td>
                                    <td data-label="For Sale" class="align-middle with-label">
                                        <span class="text-xs">
                                            {{ number_format($product->for_sale)  }}
                                        </span>
                                    </td>
                                    <td data-label="For Rent" class="align-middle with-label">
                                        <span class="text-xs">
                                            {{ number_format($product->available_for_rent)  }}
                                        </span>
                                    </td>
                                    <td data-label="Sale Price" class="align-middle with-label">
                                        <span class="text-xs">
                                            {{ '₱ '.number_format($product->sale_price, 2)  }}
                                        </span>
                                    </td>
                                    <td data-label="Rent Price" class="align-middle with-label">
                                        <span class="text-xs">
                                            {{ '₱ '.number_format($product->rent_price, 2)  }}
                                        </span>
                                    </td>
                                    {{-- <td data-label="Rental Deposit" class="align-middle with-label">
                                        <span class="text-xs">
                                            {{ '₱ '.number_format($product->damage_deposit, 2) }}
                                        </span>
                                    </td> --}}
                                    <td class="align-middle text-center action">
                                        <a href="/products/{{$product->id}}/show" class="icon icon-shape pt-1 icon-sm shadow border-radius-md bg-gradient-dark
                                            text-center align-items-center justify-content-center ">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @if(Auth::user()->classification_id == 1)
        @include('products.create')
    @endif
    
    <div class="modal fade" role="dialog"  id="download_modal">
        <div class="modal-dialog modal-dialog-top" role="document">
            <div class="modal-content">
                <form method="GET" action="/reports/inventory" target="_blank" class="form" enctype="multipart/form-data">

                    <div class="modal-header">
                        <b class="modal-title bg-pink text-gradient"><i class="fa fa-download"></i> Download Inventory Report</b>
                        <a class="close text-secondary" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </a>
                    </div>
                    <div class="modal-body">
                        <div class="row" id="create_body"> 
                            <div class="col-md-12">
                            </div>
                            <div class="col-md-6">
                                <label class="text-muted">From</label> <span class="text-danger">&#x2022;</span>
                                <input type="date" name="from_date" class="form-control"  required />
                            </div>
                            <div class="col-md-6">
                                <label class="text-muted">To</label> <span class="text-danger">&#x2022;</span>
                                <input type="date" name="to_date" class="form-control" required />
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a type="button" class="btn bg-gradient-dark" data-dismiss="modal">Close</a>
                        <button type="submit" class="btn bg-pink f-black">Download</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
@endsection