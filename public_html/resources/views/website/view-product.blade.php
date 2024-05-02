@extends('website.master')

@section('page_css')

    <style>
        #myimage{
            cursor: pointer;
            transition: 0.3s;
        }

        #myimage:hover {opacity: 0.7;}

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

@section('page_script')
    <script>
        $(document).ready(function() {
            $('.product-image-thumb').on('click', function () {

                var $image_element = $(this).find('img');

                $('.product-image').prop('src', $image_element.attr('src'));
                $('.product-image-thumb.active').removeClass('active');
                $(this).addClass('active');

            });
            
        })
    </script>

    <script>
        // Get the modal
        var modal = document.getElementById("myModal");
        
        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var pimg = document.getElementById("myimage");

        var modalImg = document.getElementById("img01");

        pimg.onclick = function(){
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

@section('content')

    <!-- *** Main Banner Area Start *** -->
    <div class="page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>Product Page</h2>
                        <!-- <span>Awesome &amp; Creative HTML CSS layout by TemplateMo</span> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- *** Main Banner Area End *** -->

    <!-- *** Product Area Starts *** -->
    <section class="section" id="product">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="product-image img-magnifier-container">
                        <img id="myimage" src="{{ asset('storage/products/' . $photos[0]->filename) }}" alt="" class="product-image" style="width: 100%">
                    </div>
                    <div class="row mt-3">
                        @foreach($photos as $photo)
                            <div class="col-4">
                                <div class="left-images product-image-thumb">
                                    <img src="{{ asset('storage/products/' . $photo->filename) }}" alt="">
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                        
                <div class="col-lg-8">
                    <div class="right-content">
                        <h3>{{ $product->name }}</h3>
                        <span class="price">
                            Sale Price: ₱ {{ number_format($product->sale_price, 2) }} <br>
                            Rent Price: ₱ {{ number_format($product->rent_price, 2) }}
                        </span>
                        <span>{!! nl2br($product->description) !!}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- *** Product Area Ends *** -->



    <!-- The Modal -->
    <div id="myModal" class="c-modal">
        <span class="c-close">&times;</span>
        <img class="c-modal-content" id="img01">
        <div id="c-caption"></div>
    </div>

@endsection
