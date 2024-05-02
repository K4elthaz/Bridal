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
            @include('layouts.message')
        </div>

        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Sales Report</h6>
                </div>
                <div class="card-body">
                    <form method="GET" action="/reports/download" target="_blank" class="form" enctype="multipart/form-data">
                        <div class="row"> 
                            <div class="col-md-12">
                            </div>
                            <div class="col-md-6">
                                <label class="text-muted">Date From</label> <span class="text-danger">&#x2022;</span>
                                <input type="date" name="from_date" class="form-control"  required />
                            </div>
                            <div class="col-md-6">
                                <label class="text-muted">Date To</label> <span class="text-danger">&#x2022;</span>
                                <input type="date" name="to_date" class="form-control" required />
                            </div>
                            <input type="hidden" name="category" value="sales">
                        </div>
                        <div align="right" class="mt-3">
                            <button type="submit" class="btn bg-pink f-black">Download</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Rentals Report</h6>
                </div>
                <div class="card-body">
                    <form method="GET" action="/reports/download" target="_blank" class="form" enctype="multipart/form-data">
                        <div class="row"> 
                            <div class="col-md-12">
                            </div>
                            <div class="col-md-6">
                                <label class="text-muted">Date From</label> <span class="text-danger">&#x2022;</span>
                                <input type="date" name="from_date" class="form-control"  required />
                            </div>
                            <div class="col-md-6">
                                <label class="text-muted">Date To</label> <span class="text-danger">&#x2022;</span>
                                <input type="date" name="to_date" class="form-control" required />
                            </div>
                            <input type="hidden" name="category" value="rentals">
                        </div>
                        <div align="right" class="mt-3">
                            <button type="submit" class="btn bg-pink f-black">Download</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Inventory Report</h6>
                </div>
                <div class="card-body">
                    <form method="GET" action="/reports/inventory" target="_blank" class="form" enctype="multipart/form-data">
                        <div class="row"> 
                            <div class="col-md-12">
                            </div>
                            <div class="col-md-6">
                                <label class="text-muted">Date From</label> <span class="text-danger">&#x2022;</span>
                                <input type="date" name="from_date" class="form-control"  required />
                            </div>
                            <div class="col-md-6">
                                <label class="text-muted">Date To</label> <span class="text-danger">&#x2022;</span>
                                <input type="date" name="to_date" class="form-control" required />
                            </div>
                        </div>
                        <div align="right" class="mt-3">
                            <button type="submit" class="btn bg-pink f-black">Download</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    
@endsection