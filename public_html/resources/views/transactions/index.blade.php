@extends('layouts.master')
@section('page_name', $page['name'])
@section('page_script')
    <script type="text/javascript" src="/js/transactions.js"></script>
@endsection
@section('page_css')

@endsection

@section('content')

    <div class="row">
        
        <div class="col-md-12">
            <a href="/transactions/create" class="btn bg-pink f-black btn-md" >
                <i class="fa fa-plus"></i> Add Transaction
            </a>
            <button class="btn bg-gradient-dark" data-toggle="modal" data-target="#download_modal"><i class="fa fa-download"></i> Download</button>
            
            @include('layouts.message')
        </div>

        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Transactions Table</h6>
                </div>
                <div class="card-body">
                    <table class="table align-items-center mb-0" id="tbl-transactions" style="width: 100%;">
                        <thead>
                            <tr>
                                <th width="11%" class="text-uppercase text-dark text-xxs font-weight-bolder ps-2">Transaction No.</th>
                                <th  class="text-uppercase text-dark text-xxs font-weight-bolder ps-2">Customer</th>
                                <th  class="text-uppercase text-dark text-xxs font-weight-bolder ps-2">Encoded By</th>
                                <th width="17%" class="text-uppercase text-dark text-xxs font-weight-bolder ps-2">Date</th>
                                <th width="11%" class="text-uppercase text-dark text-xxs font-weight-bolder ps-2">Status</th> 
                                <th width="11%" class="text-center text-uppercase text-dark text-xxs font-weight-bolder">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($transactions as $transaction)
                                <tr>
                                    <td data-label="Transaction No." class="align-middle header with-label">
                                        <span class="text-xs">
                                            {{ $transaction->id }} 
                                        </span>
                                    </td>
                                    <td data-label="Customer Name" class="align-middle header with-label">
                                        <span class="text-xs">
                                            {!! Helper::nameFormat($transaction->first_name, $transaction->middle_name, $transaction->last_name, $transaction->suffix) !!}
                                        </span>
                                    </td>
                                    <td data-label="Encoder" class="align-middle with-label">
                                        <span class="text-xs">
                                            {{ $transaction->encoder }}
                                        </span>
                                    </td>
                                    <td data-label="Date" class="align-middle with-label">
                                        <span class="text-xs">
                                            {{ $transaction->transaction_date }}
                                        </span>
                                    </td>
                                    <td data-label="Status" class="align-middle with-label">
                                        <span class="text-xs">
                                            @if($transaction->status == 'Ongoing')
                                                <span class="badge badge-sm bg-gradient-secondary">ongoing</span>
                                            @elseif($transaction->status == 'Incomplete')
                                                <span class="badge badge-sm bg-pink">incomplete</span>
                                            @else
                                                <span class="badge badge-sm bg-gradient-success">completed</span>
                                            @endif
                                        </span>
                                    </td>
                                    <td class="align-middle text-center action">
                                        <a href="/transactions/{{$transaction->id}}/show" class="icon icon-shape pt-1 icon-sm shadow border-radius-md bg-gradient-dark
                                            text-center align-items-center justify-content-center btn-edit-user">
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
    
    <div class="modal fade" role="dialog"  id="download_modal">
        <div class="modal-dialog modal-dialog-top" role="document">
            <div class="modal-content">
                <form method="GET" action="/reports/download" target="_blank" class="form" enctype="multipart/form-data">

                    <div class="modal-header">
                        <b class="modal-title bg-pink text-gradient"><i class="fa fa-download"></i> Download Report</b>
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
                            <div class="col-md-12">
                                <label class="text-muted">Category</label> <span class="text-danger">&#x2022;</span>
                                <select class="form-control select2" name="category">
                                    <option selected disabled></option>
                                    <option value="sales">Sales</option>
                                    <option value="rentals">Rentals</option>
                                </select>
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