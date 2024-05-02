@extends('website.master')

@section('page_css')

@endsection

@section('content')

    <!-- ***** Main Banner Area Start ***** -->
    <!--<div class="main-banner" id="top">-->
    <!--    <div class="container-fluid">-->
    <!--        <div class="row">-->
    <!--            <div class="col-lg-6">-->
    <!--                <div class="left-content">-->
    <!--                    <div class="thumb">-->
    <!--                        <div class="inner-content">-->
    <!--                            <h4>We Are Shawn's Bridal Shop</h4>-->
    <!--                            <span>Elevate Your Moment: Shawn's Bridal Shop, Where Dreams are Tailored.</span>-->
    <!--                        </div>-->
    <!--                        <img src="/website/images/cover1.jpg" alt="">-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-lg-6">-->
    <!--                <div class="right-content">-->
    <!--                    <div class="row">-->
    <!--                        <div class="col-lg-6">-->
    <!--                            <div class="right-first-image">-->
    <!--                                <div class="thumb">-->
    <!--                                    <div class="inner-content">-->
    <!--                                        <h4>Women</h4>-->
    <!--                                        <span>Best Clothes For Women</span>-->
    <!--                                    </div>-->
    <!--                                    <div class="hover-content">-->
    <!--                                        <div class="inner">-->
    <!--                                            <h4>Women</h4>-->
    <!--                                            <p>Unleash your inner goddess. Shawn's, style that fuels your power.</p>-->
    <!--                                            <div class="main-border-button">-->
    <!--                                                <a href="/women">Discover More</a>-->
    <!--                                            </div>-->
    <!--                                        </div>-->
    <!--                                    </div>-->
    <!--                                    <img src="/website/images/women.jpg">-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="col-lg-6">-->
    <!--                            <div class="right-first-image">-->
    <!--                                <div class="thumb">-->
    <!--                                    <div class="inner-content">-->
    <!--                                        <h4>Men</h4>-->
    <!--                                        <span>Best Clothes For Men</span>-->
    <!--                                    </div>-->
    <!--                                    <div class="hover-content">-->
    <!--                                        <div class="inner">-->
    <!--                                            <h4>Men</h4>-->
    <!--                                            <p>Invest in your style. Shawn's, crafted for the man who deserves the best.</p>-->
    <!--                                            <div class="main-border-button">-->
    <!--                                                <a href="/men">Discover More</a>-->
    <!--                                            </div>-->
    <!--                                        </div>-->
    <!--                                    </div>-->
    <!--                                    <img src="/website/images/men.jpg">-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="col-lg-6">-->
    <!--                            <div class="right-first-image">-->
    <!--                                <div class="thumb">-->
    <!--                                    <div class="inner-content">-->
    <!--                                        <h4>Kids</h4>-->
    <!--                                        <span>Best Clothes For Kids</span>-->
    <!--                                    </div>-->
    <!--                                    <div class="hover-content">-->
    <!--                                        <div class="inner">-->
    <!--                                            <h4>Kids</h4>-->
    <!--                                            <p>Spark their sparkle, fuel their fun. Shawn's, style for growing dreams.</p>-->
    <!--                                            <div class="main-border-button">-->
    <!--                                                <a href="/kid">Discover More</a>-->
    <!--                                            </div>-->
    <!--                                        </div>-->
    <!--                                    </div>-->
    <!--                                    <img src="/website/images/kid.jpg">-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Men Area Starts ***** -->
    <section class="section" id="men" style="margin-top: 50px">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Men's Latest</h2>
                    </div>
                </div>
            </div>
        </div>
        @if(count($latest_men) > 0)
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="men-item-carousel">
                            <div class="owl-men-item owl-carousel">
                                @foreach($latest_men as $men)
                                    <div class="item">
                                        <div class="thumb">
                                            <div class="hover-content">
                                                <ul>
                                                    <li><a href="/product/{{ $men->id }}/view"><i class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                            <img src="{{ asset('storage/products/' . $men->filename) }}" alt="">
                                        </div>
                                        <div class="down-content">
                                            <h4>{{ $men->name }}</h4>
                                            <span>₱ {{ number_format($men->sale_price, 2) }}</span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </section>
    <!-- ***** Men Area Ends ***** -->

    <!-- ***** Women Area Starts ***** -->
    <section class="section" id="women">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Women's Latest</h2>
                    
                    </div>
                </div>
            </div>
        </div>
        @if(count($latest_women) > 0)
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="women-item-carousel">
                            <div class="owl-women-item owl-carousel">
                                @foreach($latest_women as $women)
                                    <div class="item">
                                        <div class="thumb">
                                            <div class="hover-content">
                                                <ul>
                                                    <li><a href="/product/{{ $women->id }}/view"><i class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                            <img src="{{ asset('storage/products/' . $women->filename) }}" alt="">
                                        </div>
                                        <div class="down-content">
                                            <h4>{{ $women->name }}</h4>
                                            <span>₱ {{ number_format($women->sale_price, 2) }}</span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </section>
    <!-- ***** Women Area Ends ***** -->

    <!-- ***** Kids Area Starts ***** -->
    <section class="section" id="kids">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Kid's Latest</h2>
                    
                    </div>
                </div>
            </div>
        </div>
        @if(count($latest_kid) > 0)
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="kid-item-carousel">
                            <div class="owl-kid-item owl-carousel">
                                @foreach($latest_kid as $kid)
                                    <div class="item">
                                        <div class="thumb">
                                            <div class="hover-content">
                                                <ul>
                                                    <li><a href="/product/{{ $kid->id }}/view"><i class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                            <img src="{{ asset('storage/products/' . $kid->filename) }}" alt="">
                                        </div>
                                        <div class="down-content">
                                            <h4>{{ $kid->name }}</h4>
                                            <span>₱ {{ number_format($kid->sale_price, 2) }}</span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </section>
    <!-- ***** Kids Area Ends ***** -->

@endsection