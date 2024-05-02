@extends('layouts.master')
@section('page_name', $page['name'])
@section('page_script')

@endsection
@section('page_css')

@endsection

@section('content')

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            @include('layouts.message')
            <div class="card mb-4 mt-2">
                <div class="card-header pb-0">
                    <h6 class="text-gradient bg-pink">Update Website Information</h6>
                </div>
                <div class="card-body">
                    <form action="/website-information/update" method="POST">
                    @csrf
                        <div class="row" > 
                            <div class="col-md-12">
                                <label class="text-muted">Address</label> <span class="text-danger">&#x2022;</span>
                                <input type="text" name="address" class="form-control" value="{{old('address', $info->address)}}" required />
                            </div>
                            <div class="col-md-12">
                                <label class="text-muted">Contact No.</label> <span class="text-danger">&#x2022;</span>
                                <input type="text" name="contact_number" class="form-control" value="{{old('contact_number', $info->contact_number)}}" required />
                            </div>
                            <div class="col-md-12">
                                <label class="text-muted">Email</label> <span class="text-danger">&#x2022;</span>
                                <input type="email" name="email" class="form-control" value="{{old('email', $info->email)}}" required />
                            </div>
                            <div class="col-md-12">
                                <label class="text-muted">Facebook</label> <span class="text-danger">&#x2022;</span>
                                <input type="text" name="facebook" class="form-control" value="{{old('facebook', $info->facebook)}}" required />
                            </div>

                            <div class="col-md-12">
                                <label class="text-muted">Map</label> <span class="text-danger">&#x2022;</span>
                                <input type="text" name="map" class="form-control" value="{{old('map', $info->map)}}" required />
                            </div>
                            
                            <div class="col-md-12" align="center">
                                <button type="submit" class="btn bg-gradient-dark btn-submit mt-3">Save CHANGES</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    
@endsection