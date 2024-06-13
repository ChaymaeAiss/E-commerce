<?php

use App\Models\Produit;
use App\Models\SousFamille;

$sousfamilles= SousFamille::all();
$products= Produit::all();
$lateP = Produit::latest()->first();
$sf = SousFamille::where('id', $lateP->sous_famille_id)->value('libelle');
?>
@extends('setup.app')
@section('content')
    <div class="page-contain">
        @yield('departement')
        <!-- Main content -->
        <div id="main-content" class="main-content">

            <!--Block 01: Main slide-->
            <div class="main-slide block-slider">
                <ul class="biolife-carousel nav-none-on-mobile" data-slick='{"arrows": true, "dots": false, "slidesMargin": 0, "slidesToShow": 1, "infinite": true, "speed": 800}' >
                    <li>
                        <div class="slide-contain slider-opt03__layout01">
                            <div class="media">
                                <div class="child-elememt">
                                    <a href="#" class="link-to">
                                        <img src="assets/images/home-03/water.png" width="604" height="580" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="text-content">
                                <i class="first-line">Pomegranate</i>
                                <h3 class="second-line">Products 99% Disponible</h3>
                                <p class="third-line">We support all the brands could be here!</p>
                                <p class="buttons">
                                    <a href="#" class="btn btn-bold">Shop now</a>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="slide-contain slider-opt03__layout01">
                            <div class="media">
                                <div class="child-elememt"><a href="#" class="link-to"><img src="assets/images/home-03/slide-01-child-01.png" width="604" height="580" alt=""></a></div>
                            </div>
                            <div class="text-content">
                                <i class="first-line">Sales</i>
                                <h3 class="second-line">Sales comming!</h3>
                                <p class="third-line">Gonna have a lot of sales SOON...</p>
                                <p class="buttons">
                                    <a href="#" class="btn btn-bold">Shop now</a>
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <!--Block 02: Banner-->
            <div class="special-slide">
                <div class="container">
                <ul class="biolife-carousel dots_ring_style" data-slick='{"arrows": false, "dots": true, "slidesMargin": 30, "slidesToShow": 1, "infinite": true, "speed": 800, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 1}},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":20, "dots": false}},{"breakpoint":480, "settings":{ "slidesToShow": 1}}]}' >
                    @php
                        $latestProducts = App\Models\Produit::latest()->take(5)->get();
                    @endphp

                    @foreach($latestProducts as $product)
                    <li>
                        <div class="slide-contain biolife-banner__special">
                            <div class="banner-contain">
                                <div class="media">
                                    <a href="{{ asset('assets/auth/images/produit/' . $product->image) }}" class="bn-link">
                                        <figure><img src="{{ asset('assets/auth/images/produit/' . $product->image) }}" width="616" height="483" alt="{{ $product->designation }}"></figure>
                                    </a>
                                </div>
                                <div class="text-content">
                                    <b class="first-line">{{ $product->designation }}</b>
                                    <span class="second-line">{{ $product->marque }}</span>
                                    <span class="third-line">{{ $product->description }}</span>
                                    <div class="product-detail">
                                        <h4 class="product-name">{{ $product->designation }}</h4>
                                        <div class="price price-contain">
                                            <ins><span class="price-amount"><span class="currencySymbol">$</span>{{ ($product->prix_ht)-5 }}</span></ins>
                                            <!-- Assuming the price has a discounted price -->
                                            <del><span class="price-amount"><span class="currencySymbol">$</span>{{ $product->prix_ht }}</span></del>
                                        </div>
                                        <div class="buttons">
                                            <a href="#" class="btn add-to-cart-btn">add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
                    <div class="biolife-service type01 biolife-service__type01 sm-margin-top-0 xs-margin-top-45px">
                        <b class="txt-show-01">100%Goods</b>
                        <i class="txt-show-02">All Products</i>
                        <ul class="services-list">
                            <li>
                                <div class="service-inner">
                                    <span class="number">1</span>
                                    <span class="biolife-icon icon-beer"></span>
                                    <a class="srv-name" href="#">full stamped product</a>
                                </div>
                            </li>
                            <li>
                                <div class="service-inner">
                                    <span class="number">2</span>
                                    <span class="biolife-icon icon-schedule"></span>
                                    <a class="srv-name" href="#">place and delivery on time</a>
                                </div>
                            </li>
                            <li>
                                <div class="service-inner">
                                    <span class="number">3</span>
                                    <span class="biolife-icon icon-car"></span>
                                    <a class="srv-name" href="#">Free shipping in the city</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!--Block 03: Product Tab-->
            <div class="product-tab z-index-20 sm-margin-top-193px xs-margin-top-30px">
                <div class="container">
                    <div class="biolife-title-box">
                        <span class="subtitle">All the best item for You</span>
                        <h3 class="main-title">Related Products</h3>
                    </div>
                    <div class="biolife-tab biolife-tab-contain sm-margin-top-34px">
                        <div class="tab-head tab-head__icon-top-layout icon-top-layout">
                            
                        </div>
                        <div class="tab-content">
                            <div id="tab01_1st" class="tab-contain active">
                                <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile eq-height-contain" data-slick='{"rows":2 ,"arrows":true,"dots":false,"infinite":true,"speed":400,"slidesMargin":10,"slidesToShow":4, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":25 }},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":15}}]}'>
                                    @foreach ($products as $produit )
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="{{ route('produits.show',  $produit->id) }}"class="link-to-product">
                                                    <img src="{{ asset('assets/auth/images/produit/' . $produit->image) }}" alt="{{$produit -> designation}}" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Products</b>
                                                <h4 class="product-title"><a href="{{ asset('assets/auth/images/produit/' . $produit->image) }}" class="pr-name">{{$produit ->designation}}</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount">{{ $produit ->prix_ht }}<span class="currencySymbol">$</span></span></ins>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure the safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
            <!--Block 07: Brands-->
            <div class="brand-slide sm-margin-top-100px background-fafafa xs-margin-top-80px xs-margin-bottom-80px">
                <div class="container">
                    <ul class="biolife-carousel nav-center-bold nav-none-on-mobile" data-slick='{"rows":1,"arrows":true,"dots":false,"infinite":false,"speed":400,"slidesMargin":30,"slidesToShow":4, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3}},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":10}},{"breakpoint":450, "settings":{ "slidesToShow": 1, "slidesMargin":10}}]}'>
                        <li>
                            <div class="biolife-brd-container">
                                <a href="#" class="link">
                                    <figure><img src="assets/images/home-03/brd-01.jpg" width="214" height="163" alt=""></figure>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="biolife-brd-container">
                                <a href="#" class="link">
                                    <figure><img src="assets/images/home-03/brd-02.jpg" width="214" height="163" alt=""></figure>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="biolife-brd-container">
                                <a href="#" class="link">
                                    <figure><img src="assets/images/home-03/jumia.png" width="153" height="163" alt=""></figure>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="biolife-brd-container">
                                <a href="#" class="link">
                                    <figure><img src="assets/images/home-03/atacadao.png" width="224" height="163" alt=""></figure>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="biolife-brd-container">
                                <a href="#" class="link">
                                    <figure><img src="assets/images/home-03/carrfour.png" width="214" height="163" alt=""></figure>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="biolife-brd-container">
                                <a href="#" class="link">
                                    <figure><img src="assets/images/home-03/miniso.png" width="214" height="163" alt=""></figure>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="biolife-brd-container">
                                <a href="#" class="link">
                                    <figure><img src="assets/images/home-03/marjan.png" width="153" height="163" alt=""></figure>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="biolife-brd-container">
                                <a href="#" class="link">
                                    <figure><img src="assets/images/home-03/bim.png" width="224" height="163" alt=""></figure>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!--Block 06: Products-->
            <div class="Product-box sm-margin-top-96px xs-margin-top-0">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-5 col-sm-6">
                            <div class="advance-product-box">
                                <div class="biolife-title-box bold-style biolife-title-box__bold-style">
                                    <h3 class="title">Deal of the day</h3>
                                </div>
                                <ul class="products biolife-carousel nav-top-right nav-none-on-mobile" data-slick='{"arrows":true, "dots":false, "infinite":false, "speed":400, "slidesMargin":30, "slidesToShow":1}'>
                                    <li class="product-item">
                                    <!-- hna -->
                                        <div class="contain-product deal-layout contain-product__deal-layout">
                                            <div class="product-thumb">
                                                <a href="{{ route('produits.show',  $produit->id) }}"class="link-to-product">
                                                    <img src="{{ asset('assets/auth/images/produit/' . $lateP->image) }}" alt="{{$lateP -> designation}}" width="330" height="330" class="product-thumnail">
                                                </a>
                                                <div class="labels">
                                                    <span class="sale-label">-50%</span>
                                                </div>
                                            </div>
                                            <div class="info">
                                                <div class="biolife-countdown" data-datetime="2024/06/01 09:07:33"></div>
                                                <b class="categories">{{ $sf }}</b>
                                                <h4 class="product-title"><a href="{{ asset('assets/auth/images/produit/' . $produit->image) }}" class="pr-name">{{$lateP -> designation}}</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">$</span>{{($lateP -> prix_ht)-8}}</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">$</span>{{$lateP -> prix_ht}}</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure the safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn add-to-cart-btn">add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <!-- salat hna -->
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-7 col-sm-6">
                            <div class="advance-product-box">
                                <div class="biolife-title-box bold-style biolife-title-box__bold-style">
                                    <h3 class="title">Top Products</h3>
                                </div>
                                @php
                                    $top = App\Models\Produit::latest()->take(12)->get();
                                @endphp
                                <ul class="products biolife-carousel eq-height-contain nav-center-03 nav-none-on-mobile row-space-29px" data-slick='{"rows":2,"arrows":true,"dots":false,"infinite":false,"speed":400,"slidesMargin":30,"slidesToShow":2,"responsive":[{"breakpoint":1200,"settings":{ "rows":2, "slidesToShow": 2}},{"breakpoint":992, "settings":{ "rows":2, "slidesToShow": 1}},{"breakpoint":768, "settings":{ "rows":2, "slidesToShow": 2}},{"breakpoint":500, "settings":{ "rows":2, "slidesToShow": 1}}]}'>
                                @foreach($top as $produit)  
                                    <li class="product-item">
                                        <div class="contain-product right-info-layout contain-product__right-info-layout">
                                            <div class="product-thumb">
                                                <a href="{{ route('produits.show',  $produit->id) }}"class="link-to-product">
                                                    <img src="{{ asset('assets/auth/images/produit/' . $produit->image) }}" alt="{{$produit -> designation}}" width="270" height="270" class="product-thumnail">
                                                </a>
                                            </div>
                                            <div class="info">
                                                <h4 class="product-title"><a href="{{ asset('assets/auth/images/produit/' . $produit->image) }}" class="pr-name">{{$produit -> designation}}</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">$</span>{{($produit -> prix_ht)-5}}</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">$</span>{{$produit -> prix_ht}}</span></del>
                                                </div>
                                                <div class="rating">
                                                    <p class="star-rating"><span class="width-80percent"></span></p>
                                                    <span class="review-count">(06 Reviews)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                                </ul>
                                <div class="biolife-banner style-01 biolife-banner__style-01 xs-margin-top-80px-im sm-margin-top-30px-im">
                                    <div class="banner-contain">
                                        <a href="#" class="bn-link"></a>
                                        <div class="text-content">
                                            <span class="first-line">Food Section</span>
                                            <b class="second-line">Natural</b>
                                            <i class="third-line">Fresh Food</i>
                                            <span class="fourth-line">Premium Quality</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

