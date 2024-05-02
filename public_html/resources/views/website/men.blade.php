@extends('website.master')

@section('page_css')
	<style>
		/*PAGINATION*/
		.pagination {
		  display: inline-block !important;
		}

		.pagination a {
		  color: #2a2a2a;
		  float: left;
		  padding: 8px 16px;
		  text-decoration: none;
		  transition: background-color .3s;
		  border: 1px solid #ddd;
          margin-left: 3px;
          margin-right: 3px;
		}

		.pagination a.active {
		  background-color: #2a2a2a;
		  color: white;
		  border: 1px solid #2a2a2a;
		}

		.pagination a:hover:not(.active) {
            background-color: #2a2a2a;
            color: white
        }
        
        .page-heading {
          margin-top: 160px !important;
          margin-bottom: 30px !important;
          background-image: url('/website/images/maincover.jpg') !important;
          background-position: center center !important;
          background-size: cover !important;
          background-repeat: no-repeat !important;
          display: none !important;
        }
        
        #products {
            margin-top: 50px;
            min-height: 500px;
        }

	</style>

@endsection

@section('content')

    <!-- ***** Main Banner Area Start ***** -->
    <div class="page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>Check Men's Products</h2>
                        <span>Explore quality and style in every item. Find your perfect match today!</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->


    <!-- ***** Products Area Starts ***** -->
    <section class="section" id="products">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Men's Products</h2>
                        <span>Check out all of our products.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach($men as $m)
                    <div class="col-lg-4">
                        <div class="item">
                            <div class="thumb">
                                <div class="hover-content">
                                    <ul>
                                        <li><a href="/product/{{ $m->id }}/view"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                                <img src="{{ asset('storage/products/' . $m->filename) }}" alt="">
                            </div>
                            <div class="down-content">
                                <h4>{{ $m->name }}</h4>
                                <span>₱ {{ number_format($m->sale_price, 2) }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
                
                <div class="col-lg-12" align="center">
                    @if ($men->hasPages())
                        <ul class="pagination">
                            {{-- Previous Page Link --}}
                            @if ($men->onFirstPage())
                                <a class="disabled"><span><</span></a>
                            @else
                                <a href="{{ $men->previousPageUrl() }}" rel="prev"><</a>
                            @endif

                            @if($men->currentPage() > 3)
                                <a class="hidden-xs" href="{{ $men->url(1) }}">1</a>
                            @endif
                            @if($men->currentPage() > 4)
                                <a class="disabled" style="color: #2a2a2a"><span>...</span></a>
                            @endif
                            @foreach(range(1, $men->lastPage()) as $i)
                                @if($i >= $men->currentPage() - 2 && $i <= $men->currentPage() + 2)
                                    @if ($i == $men->currentPage())
                                        <a class="active"><span>{{ $i }}</span></a>
                                    @else
                                        <a href="{{ $men->url($i) }}">{{ $i }}</a>
                                    @endif
                                @endif
                            @endforeach
                            @if($men->currentPage() < $men->lastPage() - 3)
                                <a class="disabled" style="color: #2a2a2a"><span>...</span></a>
                            @endif
                            @if($men->currentPage() < $men->lastPage() - 2)
                                <a class="hidden-xs" href="{{ $men->url($men->lastPage()) }}">{{ $men->lastPage() }}</a>
                            @endif

                            {{-- Next Page Link --}}
                            @if ($men->hasMorePages())
                                <a href="{{ $men->nextPageUrl() }}" rel="next">></a>
                            @else
                                <a class="disabled"><span>></span></a>
                            @endif
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Products Area Ends ***** -->

@endsection