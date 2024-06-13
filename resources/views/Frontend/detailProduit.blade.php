@extends('setup.app')
@section('content')
 <!--Hero Section-->
    <div class="hero-section hero-background">
        <h1 class="page-title">Detail Product</h1>
    </div>

    <!--Navigation section-->
    <div class="container">
        <nav class="biolife-nav">
            <ul>
                <li class="nav-item"><a href="/" class="permal-link">Home</a></li>
                <li class="nav-item"><span class="current-page">Detail Product</span></li>
            </ul>
        </nav>
    </div>

    <div class="page-contain single-product">

        <div class="container">

            <!-- Main content -->
            <div id="main-content" class="main-content">
                
                <!-- summary info -->
                <div class="sumary-product single-layout">
                    <div class="media">
                        <ul class="biolife-carousel slider-for" data-slick='{"arrows":false,"dots":false,"slidesMargin":30,"slidesToShow":1,"slidesToScroll":1,"fade":true,"asNavFor":".slider-nav"}'>
                            <li><img src="{{ asset('assets/auth/images/produit/' . $produit->image) }}" alt="" width="500" height="500"></li>
                        </ul>
                    </div>
                    <div class="product-attribute">
                        <h2 class="title">{{$produit -> designation}}</h2>
                        <div class="rating">
                            <p class="star-rating"><span class="width-80percent"></span></p>
                            <span class="review-count">(04 Reviews)</span>
                            <b class="category">Category: 
                                @php
                                    $sousfamille = App\Models\SousFamille::find($produit->sous_famille_id);
                                @endphp
                                {{ $sousfamille ? $sousfamille->libelle : 'No SubFamilly' }}
                            </b>
                        </div>
                        <span class="sku">CB: {{$produit -> codebarre}}</span>
                        <p class="excerpt">Product description : {{$produit -> description}}</p>
                        <div class="price">
                            <ins><span class="price-amount"><span class="currencySymbol">$</span>{{($produit -> prix_ht)-5}}</span></ins>
                            <del><span class="price-amount"><span class="currencySymbol">$</span>{{$produit -> prix_ht}}</span></del>
                        </div>
                        <div class="shipping-info">
                            <p class="shipping-day">3-Day Shipping</p>
                            <p class="for-today">Pree Pickup Today</p>
                        </div>
                    </div>
                    <div class="action-form">
                        <div class="buttons external-btn">
                        <a href="javascript:void(0)"  onclick="event.preventDefault();document.getElementById('addtocart').submit();" id="cartEffect" class="btn add-to-cart-btn">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Add To Cart</span>
                            <form id="addtocart" method="post" action="{{route('cart.store')}}">
                                @csrf
                                <input type="hidden" name="id" value="{{$produit->id}}">                                             
                                <input type="hidden" name="quantity" id="qty" value="1">
                            </form>
                        </a>
                        </div>
                        <div class="location-shipping-to">
                            <span class="title">Ship to:</span>
                            <select name="shipping_to" class="country">
                                <option value="-1">Select Country</option>
                                <option value="america">Morocco</option>
                                <option value="america">USA</option>
                            </select>
                        </div>
                        <div class="social-media">
                            <ul class="socials">
                                <li><a href="https://twitter.com/" title="twitter" class="socail-btn"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.facebook.com/" title="facebook" class="socail-btn"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.pinterest.fr/" title="pinterest" class="socail-btn"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.youtube.com/" title="youtube" class="socail-btn"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.instagram.com/" title="instagram" class="socail-btn"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="acepted-payment-methods">
                            <ul class="payment-methods">
                                <li><img src="assets/images/card1.jpg" alt="" width="51" height="36"></li>
                                <li><img src="assets/images/card2.jpg" alt="" width="51" height="36"></li>
                                <li><img src="assets/images/card3.jpg" alt="" width="51" height="36"></li>
                                <li><img src="assets/images/card4.jpg" alt="" width="51" height="36"></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Tab info -->
                <div class="product-tabs single-layout biolife-tab-contain">
                    <div class="tab-head">
                        <ul class="tabs">
                            <li class="tab-element active"><a href="#tab_1st" class="tab-link">Products Descriptions</a></li>
                            <li class="tab-element" ><a href="#tab_2nd" class="tab-link">Addtional information</a></li>
                            <li class="tab-element" ><a href="#tab_3rd" class="tab-link">Shipping & Delivery</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div id="tab_1st" class="tab-contain desc-tab active">
                            <p class="desc">{{$produit -> description}}</p>
                            <div class="desc-expand">
                                <span class="title">Organic Fresh Fruit</span>
                                <ul class="list">
                                    <li>100% good product</li>
                                    <li>100 awsome product</li>
                                </ul>
                            </div>
                        </div>
                        <div id="tab_2nd" class="tab-contain addtional-info-tab">
                            <table class="tbl_attributes">
                                <tbody>
                                <tr>
                                    <th>Color</th>
                                    <td><p>Black, Blue, Purple, Red, Yellow</p></td>
                                </tr>
                                <tr>
                                    <th>Size</th>
                                    <td><p>
                                        @php
                                            $unite = App\Models\Unite::find($produit->unite_id);
                                        @endphp
                                        {{ $unite ? $unite->unite : 'No Unite' }}
                                    </p></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div id="tab_3rd" class="tab-contain shipping-delivery-tab">
                            <div class="accodition-tab biolife-accodition">
                                <ul class="tabs">
                                    <li class="tab-item">
                                        <span class="title btn-expand">How long will it take to receive my order?</span>
                                        <div class="content">
                                            <p>Orders placed before 3pm eastern time will normally be processed and shipped by the following business day. For orders received after 3pm, they will generally be processed and shipped on the second business day. For example if you place your order after 3pm on Monday the order will ship on Wednesday. Business days do not include Saturday and Sunday and all Holidays. Please allow additional processing time if you order is placed on a weekend or holiday. Once an order is processed, speed of delivery will be determined as follows based on the shipping mode selected:</p>
                                            <div class="desc-expand">
                                                <span class="title">Shipping mode</span>
                                                <ul class="list">
                                                    <li>Standard (in transit 3-5 business days)</li>
                                                    <li>Priority (in transit 2-3 business days)</li>
                                                    <li>Express (in transit 1-2 business days)</li>
                                                    <li>Gift Card Orders are shipped via USPS First Class Mail. First Class mail will be delivered within 8 business days</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="tab-item">
                                        <span class="title btn-expand">How is the shipping cost calculated?</span>
                                        <div class="content">
                                            <p>You will pay a shipping rate based on the weight and size of the order. Large or heavy items may include an oversized handling fee. Total shipping fees are shown in your shopping cart. Please refer to the following shipping table:</p>
                                            <p>Note: Shipping weight calculated in cart may differ from weights listed on product pages due to size and actual weight of the item.</p>
                                        </div>
                                    </li>
                                    <li class="tab-item">
                                        <span class="title btn-expand">Why Didn’t My Order Qualify for FREE shipping?</span>
                                        <div class="content">
                                            <p>We do not deliver to P.O. boxes or military (APO, FPO, PSC) boxes. We deliver to all 50 states plus Puerto Rico. Certain items may be excluded for delivery to Puerto Rico. This will be indicated on the product page.</p>
                                        </div>
                                    </li>
                                    <li class="tab-item">
                                        <span class="title btn-expand">Shipping Restrictions?</span>
                                        <div class="content">
                                            <p>We do not deliver to P.O. boxes or military (APO, FPO, PSC) boxes. We deliver to all 50 states plus Puerto Rico. Certain items may be excluded for delivery to Puerto Rico. This will be indicated on the product page.</p>
                                        </div>
                                    </li>
                                    <li class="tab-item">
                                        <span class="title btn-expand">Undeliverable Packages?</span>
                                        <div class="content">
                                            <p>Occasionally packages are returned to us as undeliverable by the carrier. When the carrier returns an undeliverable package to us, we will cancel the order and refund the purchase price less the shipping charges. Here are a few reasons packages may be returned to us as undeliverable:</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- related products -->
                <div class="product-related-box single-layout">
                    <div class="biolife-title-box lg-margin-bottom-26px-im">
                        <span class="biolife-icon icon-organic"></span>
                        <span class="subtitle">All the best item for You</span>
                        <h3 class="main-title">Related Products</h3>
                    </div>
                    <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile" data-slick='{"rows":1,"arrows":true,"dots":false,"infinite":false,"speed":400,"slidesMargin":0,"slidesToShow":5, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":20 }},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":10}}]}'>
                    @foreach($items as $item)
                        <li class="product-item">
                            <div class="contain-product layout-default">
                                <div class="product-thumb">
                                    <a  class="link-to-product">
                                        <img src="{{ asset('assets/auth/images/produit/' . $item->image) }}" alt="dd" width="270" height="270" class="product-thumnail">
                                    </a>
                                </div>
                                <div class="info">
                                    <b class="categories">
                                        @php
                                            $sousfamille = App\Models\SousFamille::find($item->sous_famille_id);
                                        @endphp
                                        {{ $sousfamille ? $sousfamille->libelle : 'No SubFamilly' }}</b>
                                    <h4 class="product-title"><a href="{{ route('produits.show',  $item->id) }}" class="pr-name">{{$item -> designation}}</a></h4>
                                    <div class="price">
                                        <ins><span class="price-amount"><span class="currencySymbol">$</span>{{($item -> prix_ht)-5}}</span></ins>
                                        <del><span class="price-amount"><span class="currencySymbol">$</span>{{$item -> prix_ht}}</span></del>
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
@endsection