@extends('layouts.master')

@section('page_name', $page['name'])

@section('page_script')
    <script type="text/javascript" src="/js/customers.js"></script>
    <script>
        // Get the modal
        var modal = document.getElementById("myModal");
        
        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var profile = document.getElementById("myProfile");

        var cId = document.getElementById("myId");

        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("c-caption");
        profile.onclick = function(){
          modal.style.display = "block";
          modalImg.src = this.src;
        }

        cId.onclick = function(){
          modal.style.display = "block";
          modalImg.src = this.src;
        }
        
        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("c-close")[0];
        
        // When the user clicks on <span> (x), close the modal
        span.onclick = function() { 
          modal.style.display = "none";
        }
    </script>
@endsection

@section('page_css')
    <style>
        #myProfile, #myId {
            cursor: pointer;
            transition: 0.3s;
        }

        #myProfile:hover {opacity: 0.7;}

        #myId:hover {opacity: 0.7;}

        /* The Modal (background) */
        .c-modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 10000 !important; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
        }

        /* Modal Content (image) */
        .c-modal-content {
            margin: auto;
            display: block;
            width: 60%;
            max-width: 500px;
        }

        /* Caption of Modal Image */
        #c-caption {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
            text-align: center;
            color: #ccc;
            padding: 10px 0;
            height: 150px;
        }

        /* Add Animation */
        .c-modal-content, #c-caption {  
            -webkit-animation-name: zoom;
            -webkit-animation-duration: 0.6s;
            animation-name: zoom;
            animation-duration: 0.6s;
        }

        @-webkit-keyframes zoom {
            from {-webkit-transform:scale(0)} 
            to {-webkit-transform:scale(1)}
        }

        @keyframes zoom {
            from {transform:scale(0)} 
            to {transform:scale(1)}
        }

        /* The Close Button */
        .c-close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
        }

        .c-close:hover, .c-close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }

        /* 100% Image Width on Smaller Screens */
        @media only screen and (max-width: 700px){
            .c-modal-content {
                width: 100%;
            }
        }
    </style>
@endsection
@section('content')

    @include('layouts.message')

    <div class="page-header mt-n1 min-height-200 border-radius-xl mt-4" style="background-image: url('/vendor/soft_ui/assets/img/curved-images/curved0.jpg'); background-position-y: 50%;">
        <span class="mask bg-pink opacity-8"></span>
    </div>
    <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
        <div class="row">
            <div class="col-md-10">
                <div class="row">
                    <div class="col-auto">
                        <div class="avatar avatar-xl pt-3 position-relative">
                            <img id="myProfile" src="{{ asset('storage/customers/' . $customer->profile_picture) }}" alt="profile_image" class="w-100 border-radius-lg">
                        </div>
                    </div>
                    <div class="col-auto my-auto">
                        <div class="h-100">
                            <h5 class="mb-1 btn-edit-customer" 
                                id="{{$customer->id}}" 
                                data-full-name="{{$customer->full_name}}"
                                data-contact-number="{{$customer->contact_number}}"
                                data-address="{{$customer->address}}"
                                data-first-name="{{$customer->first_name}}"
                                data-middle-name="{{$customer->middle_name}}"
                                data-last-name="{{$customer->last_name}}"
                                data-suffix="{{$customer->suffix}}"
                            >
                                {!! Helper::nameFormat($customer->first_name, $customer->middle_name, $customer->last_name, $customer->suffix) !!}  &nbsp;&nbsp;&nbsp;<i class="fa fa-pen"></i>
                            </h5>
                            <p class="mb-0 font-weight-bold text-sm"> 
                                Customer
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-2">
                <div class="position-relative pt-2" >
                    <img id="myId" src="{{ asset('storage/customers/' . $customer->id_picture) }}" alt="id-pictre" style=" height: 74px" class="w-80 border-radius-lg">
                </div>
            </div>
            
        </div>
    </div>

    <div class="card mb-4 mt-3">
        <div class="card-header pb-0">
            <h6>Transactions Table</h6>
        </div>
        <div class="card-body">
            <table class="table align-items-center mb-0" id="tbl-customers" style="width: 100%;">
                <thead>
                    <tr>
                        <th width="17%" class="text-uppercase text-dark text-xxs font-weight-bolder ps-2">Transaction No.</th>
                        <th class="text-uppercase text-dark text-xxs font-weight-bolder ps-2">Encoder</th> 
                        <th width="20%" class="text-uppercase text-dark text-xxs font-weight-bolder ps-2">Date</th>
                        <th width="11%" class="text-uppercase text-dark text-xxs font-weight-bolder ps-2">Status</th> 
                        <th width="11%" class="text-center text-uppercase text-dark text-xxs font-weight-bolder">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transactions as $transaction)
                        <tr>

                            <td data-label="Transaction No." class="align-middle header with-label">
                                <span class="text-xs">
                                    {{ $transaction->id }} 
                                </span>
                            </td>
                            <td data-label="Contact Number" class="align-middle header with-label">
                                <span class="text-xs">
                                    {{ $transaction->encoder }}
                                </span>
                            </td>
                            <td data-label="Classification" class="align-middle with-label">
                                <span class="text-xs">
                                    {{ date_format(date_create($transaction->transaction_date), 'F j, Y')  }}
                                </span>
                            </td>
                            <td data-label="Status" class="align-middle with-label">
                                <span class="text-xs">
                                    @if($transaction->status == "Ongoing")
                                        <span class="badge badge-sm bg-gradient-secondary">ongoing</span>
                                    @elseif($transaction->status == "Incomplete")
                                        <span class="badge badge-sm bg-pink">incomplete</span>
                                    @else
                                        <span class="badge badge-sm bg-gradient-success">completed</span>
                                    @endif
                                </span>
                            </td>
                            <td class="align-middle text-center action">
                                <a href="/transactions/{{$transaction->id}}/show" class="icon icon-shape pt-1 icon-sm shadow border-radius-md bg-gradient-dark
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

    <!-- The Modal -->
    <div id="myModal" class="c-modal">
        <span class="c-close">&times;</span>
        <img class="c-modal-content" id="img01">
        <div id="c-caption"></div>
    </div>

    @include('customers.edit')

@endsection