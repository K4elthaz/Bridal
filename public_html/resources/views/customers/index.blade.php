@extends('layouts.master')
@section('page_name', $page['name'])
@section('page_script')
    <script type="text/javascript" src="/js/customers.js"></script>
@endsection
@section('page_css')

@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <a href="#" class="btn bg-pink f-black trigger-modal btn-md" data-toggle="modal" data-target="#create_modal">
                <i class="fa fa-plus"></i> Add Customer
            </a>
            @include('layouts.message')
        </div>
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Customers Table</h6>
                </div>
                <div class="card-body">
                    <table class="table align-items-center mb-0" id="tbl-customers" style="width: 100%;">
                        <thead>
                            <tr>
                                <th width="25%" class="text-uppercase text-dark text-xxs font-weight-bolder ps-2">Full Name</th>
                                <th width="20%" class="text-uppercase text-dark text-xxs font-weight-bolder ps-2">Contact No.</th>
                                <th class="text-uppercase text-dark text-xxs font-weight-bolder ps-2">Address</th> 
                                <th width="11%" class="text-center text-uppercase text-dark text-xxs font-weight-bolder">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($customers as $customer)
                                <tr>

                                    <td data-label="Name" class="align-middle header with-label">
                                        <span class="text-xs">
                                            {!! Helper::nameFormat($customer->first_name, $customer->middle_name, $customer->last_name, $customer->suffix) !!} 
                                        </span>
                                    </td>
                                    <td data-label="Contact Number" class="align-middle header with-label">
                                        <span class="text-xs">
                                            {{ $customer->contact_number }}
                                        </span>
                                    </td>
                                    <td data-label="Classification" class="align-middle with-label">
                                        <span class="text-xs">
                                            {{ $customer->address  }} {{ $customer->barangay->name }} {{ ucwords(strtolower($customer->municipality->name.','))  }} {{ ucwords(strtolower($customer->province->name)) }}
                                        </span>
                                    </td>
                                    <td class="align-middle text-center action">
                                        <a href="/customers/{{$customer->id}}/show" class="icon icon-shape pt-1 icon-sm shadow border-radius-md bg-gradient-dark
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

    @include('customers.create')
    
@endsection