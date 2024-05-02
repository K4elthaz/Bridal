@extends('layouts.master')
@section('page_name', $page['name'])
@section('page_script')
    <script type="text/javascript" src="/js/rental.js"></script>
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
                    <h6>Out For Rent</h6>
                </div>
                <div class="card-body">
                    <table class="table align-items-center mb-0" id="tbl-rental" style="width: 100%;">
                        <thead>
                            <tr>
                                <th width="11%" class="text-uppercase text-dark text-xxs font-weight-bolder ps-2">Transaction No.</th>
                                <th width="" class="text-uppercase text-dark text-xxs font-weight-bolder ps-2">Customer</th>
                                <th width="" class="text-uppercase text-dark text-xxs font-weight-bolder ps-2">Product</th> 
                                <th width="11%" class="text-uppercase text-dark text-xxs font-weight-bolder ps-2">Category</th> 
                                <th width="11%" class="text-uppercase text-dark text-xxs font-weight-bolder ps-2">Rent Price</th> 
                                <th width="11%" class="text-uppercase text-dark text-xxs font-weight-bolder ps-2">Status</th> 
                                <th width="11%" class="text-center text-uppercase text-dark text-xxs font-weight-bolder">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ongoing as $ongoing)
                                <tr>
                                    <td data-label="Transaction No" class="align-middle header with-label">
                                        <span class="text-xs">
                                            {{ $ongoing->transaction_id }} 
                                        </span>
                                    </td>
                                    <td data-label="Customer" class="align-middle header with-label">
                                        <span class="text-xs">
                                            {!! Helper::nameFormat($ongoing->first_name, $ongoing->middle_name, $ongoing->last_name, $ongoing->suffix) !!}
                                        </span>
                                    </td>
                                    <td data-label="Product" class="align-middle header with-label">
                                        <span class="text-xs">
                                            {{ $ongoing->name.' '.$ongoing->description  }} 
                                        </span>
                                    </td>
                                    <td data-label="Category" class="align-middle header with-label">
                                        <span class="text-xs">
                                            @if($ongoing->category_id == 1)
                                                MEN'S
                                            @elseif($ongoing->category_id == 2)
                                                WOMEN'S
                                            @else
                                                KID'S
                                            @endif
                                        </span>
                                    </td>
                                    <td data-label="Price" class="align-middle header with-label">
                                        <span class="text-xs">
                                            {{'₱ '.number_format($ongoing->rent_price, 2) }}
                                        </span>
                                    </td>
                                    <td data-label="Status" class="align-middle header with-label">
                                        <span class="text-xs">
                                            <span class="badge badge-sm bg-gradient-secondary">{{ $ongoing->status }} </span>
                                        </span>
                                    </td>
                                    <td class="align-middle text-center action">
                                        <a href="#" class="icon icon-shape pt-1 icon-sm shadow border-radius-md bg-gradient-dark
                                            text-center align-items-center justify-content-center btn-edit"
                                            id="{{$ongoing->id}}" 
                                            data-transaction-date="{{$ongoing->transaction_date}}" 
                                            data-date-returned="{{$ongoing->date_returned}}"
                                            data-status="{{$ongoing->status}}"
                                            >
                                            <i class="fa fa-pen"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach



                            @foreach ($completed as $complete)
                                <tr>
                                    <td data-label="Transaction No" class="align-middle header with-label">
                                        <span class="text-xs">
                                            {{ $complete->transaction_id }} 
                                        </span>
                                    </td>
                                    <td data-label="Customer" class="align-middle header with-label">
                                        <span class="text-xs">
                                            {!! Helper::nameFormat($complete->first_name, $complete->middle_name, $complete->last_name, $complete->suffix) !!}
                                        </span>
                                    </td>
                                    <td data-label="Product" class="align-middle header with-label">
                                        <span class="text-xs">
                                            {{ $complete->name.' '.$complete->description  }} 
                                        </span>
                                    </td>
                                    <td data-label="Category" class="align-middle header with-label">
                                        <span class="text-xs">
                                            @if($complete->category_id == 1)
                                                MEN'S
                                            @elseif($complete->category_id == 2)
                                                WOMEN'S
                                            @else
                                                KID'S
                                            @endif
                                        </span>
                                    </td>
                                    <td data-label="Price" class="align-middle header with-label">
                                        <span class="text-xs">
                                            {{'₱ '.number_format($complete->rent_price, 2) }}
                                        </span>
                                    </td>
                                    <td data-label="Status" class="align-middle header with-label">
                                        <span class="text-xs">
                                            <span class="badge badge-sm bg-gradient-success">{{ $complete->status }} </span>
                                        </span>
                                    </td>
                                    <td class="align-middle text-center action">
                                        <a href="#" class="icon icon-shape pt-1 icon-sm shadow border-radius-md bg-gradient-dark
                                            text-center align-items-center justify-content-center btn-edit"
                                            id="{{$complete->id}}" 
                                            data-transaction-date="{{$complete->transaction_date}}" 
                                            data-date-returned="{{$complete->date_returned}}"
                                            data-status="{{$complete->status}}"
                                            >
                                            <i class="fa fa-pen"></i>
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

    @include('rental.edit')
    
@endsection