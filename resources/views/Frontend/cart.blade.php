<?php
    use Gloudemans\Shoppingcart\Facades\Cart;
?>
@extends('setup.app')
@section('content')
        <!--Hero Section-->
        <div class="hero-section hero-background">
        <h1 class="page-title">Cart</h1>
    </div>

    <!--Navigation section-->
    <div class="container">
        <nav class="biolife-nav">
            <ul>
                <li class="nav-item"><a href="/" class="permal-link">Home</a></li>
                <li class="nav-item"><span class="current-page">ShoppingCart</span></li>
            </ul>
        </nav>
    </div>

    <div class="page-contain shopping-cart">

        <!-- Main content -->
        <div id="main-content" class="main-content">
            <div class="container">

                <!--Top banner-->
                <div class="top-banner background-top-banner-for-shopping min-height-346px">
                    <h3 class="title">Save $50!*</h3>
                    <p class="subtitle">Save $50 when you open an account online & spen $50 on your first online purchase to day</p>
                    <ul class="list">
                        <li>
                            <div class="price-less">
                                <span class="desc">Purchase amount</span>
                                <span class="cost">$0.00</span>
                            </div>
                        </li>
                        <li>
                            <div class="price-less">
                                <span class="desc">Credit on billing statement</span>
                                <span class="cost">$0.00</span>
                            </div>
                        </li>
                        <li>
                            <div class="price-less sum">
                                <span class="desc">Cost affter statemen credit</span>
                                <span class="cost">$0.00</span>
                            </div>
                        </li>
                    </ul>
                    <p class="btns">
                        <a href="#" class="btn">Open Account</a>
                        <a href="#" class="btn">Learn more</a>
                    </p>
                </div>

                <!--Cart Table-->
                <div class="shopping-cart-container">
                    @if($cartItems->Count() > 0)  
                    <div class="row">
                        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                            <h3 class="box-title">Your cart items</h3>
                            <form class="shopping-cart-form" action="#" method="post">
                                <table class="shop_table cart-form">
                                    <thead>
                                    <tr>
                                        <th class="product-name">Product Name</th>
                                        <th class="product-price">Price</th>
                                        <th class="product-quantity">Quantity</th>
                                        <th class="product-subtotal">Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($cartItems as $item)
                                    <tr class="cart_item">
                                        <td class="product-thumbnail" data-title="Product Name">
                                            <a class="prd-thumb" href="#">
                                                <figure><img width="113" height="113" src="{{ asset('assets/auth/images/produit/')}}/{{$item->model->image}}" alt="shipping cart"></figure>
                                            </a>
                                            <a class="prd-name" href="#">{{$item -> name}}</a>
                                            <div class="action">
                                                <a href="#" onclick="removeItemFromCart('{{$item->rowId}}')" class="remove"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                            </div>
                                        </td>
                                        <td class="product-price" data-title="Price">
                                            <div class="price price-contain">
                                                <ins><span class="price-amount"><span class="currencySymbol">$</span>{{($item -> price)-5}}</span></ins>
                                                <del><span class="price-amount"><span class="currencySymbol">$</span>{{$item -> price}}</span></del>
                                            </div>
                                        </td>
                                        <td class="product-quantity" data-title="Quantity">
                                            <div class="quantity-box type1">
                                                <div class="qty-input">
                                                    <input type="text" name="qty12554" 
                                                    value="{{$item -> qty}}" data-max_value="20" 
                                                    data-min_value="1" data-step="1" name="quantity" data-rowid="{{$item->rowId}}" onchange="updateQuantity(this)">
                                                    <a href="#" class="qty-btn btn-up"><i class="fa fa-caret-up" aria-hidden="true"></i></a>
                                                    <a href="#" class="qty-btn btn-down"><i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="product-subtotal" data-title="Total">
                                            <div class="price price-contain">
                                                <ins><span class="price-amount"><span class="currencySymbol">$</span>{{$item -> subtotal()}}</span></ins>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                    <tr class="cart_item wrap-buttons">
                                        <td class="wrap-btn-control" colspan="4">
                                            <a href="/listProduit" class="btn back-to-shop">Back to Shop</a>
                                            <button class="btn btn-update" type="submit" disabled>update</button>
                                            <a href="javascript:void(0)" onclick="clearCart()" class="btn btn-clear">clear all</a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                            <div class="shpcart-subtotal-block">
                                <div class="subtotal-line">
                                    <b class="stt-name">Subtotal <span class="sub">{{Cart::instance('cart')->content()->count()}} Products</span></b>
                                    <span class="stt-price">$ {{ Cart::instance('cart')->subtotal() }}</span>
                                </div>
                                <div class="subtotal-line">
                                    <b class="stt-name">Shipping</b>
                                    <span class="stt-price">$ {{ Cart::instance('cart')->tax() }}</span>
                                </div>
                                <div class="btn-checkout">
                                    <a href="#" class="btn checkout">Check out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @else
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h2>Your cart is empty !</h2>
                                <h5 class="mt-3">Add Items to it now.</h5>
                                <a href="/listProduit" class="btn btn-warning mt-5">Shop Now</a>
                            </div>
                        </div>
                    @endif
                    <!-- update -->
                    <form id="updateCartQty" action="{{route('cart.update')}}" method="POST">
                        @csrf
                        @method('put')
                        <input type="hidden" id="rowId" name="rowId" />
                        <input type="hidden" id="quantity" name="quantity" />
                    </form>
                    <!-- delete -->
                    <form id="deleteFromCart" action="{{route('cart.remove')}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="hidden" id="rowId_D" name="rowId" />
                    </form>
                    <!-- clear -->
                    <form id="clearCart" action="{{route('cart.clear')}}" method="post">
                        @csrf
                        @method('delete') 
                    </form>
                </div>

                <!--Related Product-->
                <div class="product-related-box single-layout">
                    <div class="biolife-title-box lg-margin-bottom-26px-im">
                        <span class="biolife-icon icon-organic"></span>
                        <span class="subtitle">All the best item for You</span>
                        <h3 class="main-title">Related Products</h3>
                    </div>
                    <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile" data-slick='{"rows":1,"arrows":true,"dots":false,"infinite":false,"speed":400,"slidesMargin":0,"slidesToShow":5, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":20}},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":10}}]}'>
                        <li class="product-item">
                            <div class="contain-product layout-default">
                                <div class="product-thumb">
                                    <a href="#" class="link-to-product">
                                        <img src="assets/images/products/p-18.jpg" alt="dd" width="270" height="270" class="product-thumnail">
                                    </a>
                                </div>
                                <div class="info">
                                    <b class="categories">Fresh Fruit</b>
                                    <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a></h4>
                                    <div class="price">
                                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                    </div>
                                    <div class="slide-down-box">
                                        <p class="message">All products are carefully selected to ensure food safety.</p>
                                        <div class="buttons">
                                            <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                            <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    <script>
        function updateQuantity(qty) {
            // Get the rowId and quantity values
            var rowId = qty.getAttribute('data-rowid');
            var quantity = qty.value;

            // Set the values of rowId and quantity inputs
            document.getElementById('rowId').value = rowId;
            document.getElementById('quantity').value = quantity;

            // Submit the form
            document.getElementById('updateCartQty').submit();
        }
        function removeItemFromCart(rowId) {
            // Get the form and hidden input element by their IDs
            var form = document.getElementById('deleteFromCart');
            var rowIdInput = document.getElementById('rowId_D');
            
            // Set the value of the hidden input
            rowIdInput.value = rowId;

            // Submit the form
            form.submit();
        }
        function clearCart() {
            // Get the form element by its ID
            var form = document.getElementById('clearCart');

            // Submit the form
            form.submit();
        }
            
    </script>

@endsection