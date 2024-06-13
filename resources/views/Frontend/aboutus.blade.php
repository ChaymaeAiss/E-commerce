@extends('setup.app')
@section('content')


<div class="row">  
    <div class="hero-section hero-background">
        <h1 class="page-title">About Us</h1>
    </div>

    <!--Navigation section-->
    <div class="container">
        <nav class="biolife-nav">
            <ul>
                <li class="nav-item"><a href="/" class="permal-link">Home</a></li>
                <li class="nav-item"><span class="current-page">About us</span></li>
            </ul>
        </nav>
    </div>

    <div class="page-contain about-us">

        <!-- Main content -->
        <div id="main-content" class="main-content">

            <div class="welcome-us-block">
                <div class="container">
                    <h4 class="title">Welcome to Graceful Goods store!</h4>
                    <div class="text-wraper">
                        <p class="text-info">Welcome to Greaceful Goods! We're your destination for exceptional products that elevate everyday experiences. With a focus on quality, craftsmanship, and community, we curate a diverse collection of fashion-forward apparel, cutting-edge gadgets, artisanal home decor, and wellness essentials. Our commitment to authenticity and integrity ensures that every item tells a story of excellence. Join us on this adventure as we redefine the art of shopping and celebrate the beauty of craftsmanship, creativity, and community. <br> Happy shopping!</p>
                        <p class="qt-text">Warm regards, <br> Greaceful Goods Team</p>
                    </div>
                </div>
            </div>

            <div class="why-choose-us-block">
                <div class="container">
                    <h4 class="box-title">Why Choose us</h4>
                    <b class="subtitle">Good products is taken from the world's most trusted places with strict safety & security cycles</b>
                    <div class="showcase">
                        <div class="sc-child sc-left-position">
                            <ul class="sc-list">
                                <li>
                                    <div class="sc-element color-01">
                                        <span class="biolife-icon icon-fresh-drink"></span>
                                        <div class="txt-content">
                                            <span class="number">01</span>
                                            <b class="title">Always Fresh</b>
                                            <p class="desc">Food products are kept in the best condition to ensure always fresh</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="sc-element color-02">
                                        <span class="biolife-icon icon-healthy-about"></span>
                                        <div class="txt-content">
                                            <span class="number">02</span>
                                            <b class="title">Overall Healthy</b>
                                            <p class="desc">Food products are kept in the best condition to ensure always fresh</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="sc-element color-03">
                                        <span class="biolife-icon icon-green-safety"></span>
                                        <div class="txt-content">
                                            <span class="number">03</span>
                                            <b class="title">Encironmental Safety</b>
                                            <p class="desc">Our products are kept in the best packaging to protect the the environment</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="sc-child sc-center-position">
                            <figure><img src="assets/images/about-us/bn04.jpg" alt="" width="622" height="656"></figure>
                        </div>
                        <div class="sc-child sc-right-position">
                            <ul class="sc-list">
                                <li>
                                    <div class="sc-element color-04">
                                        <span class="biolife-icon icon-capacity-about"></span>
                                        <div class="txt-content">
                                            <span class="number">04</span>
                                            <b class="title">Many categories</b>
                                            <p class="desc">We support a lot of different categories</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="sc-element color-05">
                                        <span class="biolife-icon icon-arteries-about"></span>
                                        <div class="txt-content">
                                            <span class="number">05</span>
                                            <b class="title">Good For All</b>
                                            <p class="desc">You can here find products for all the ages !</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="sc-element color-06">
                                        <span class="biolife-icon icon-title"></span>
                                        <div class="txt-content">
                                            <span class="number">06</span>
                                            <b class="title">Quality Standards</b>
                                            <p class="desc">You gonna always find the best quality here in our store</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="testimonial-block">
                <div class="container">
                    <h4 class="box-title">Our Team</h4>
                    <ul class="testimonial-list biolife-carousel" data-slick='{"arrows":false,"dots":true,"infinite":false,"speed":400,"slidesMargin":30,"slidesToShow":3, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 3}},{"breakpoint":992, "settings":{ "slidesToShow": 2}},{"breakpoint":768, "settings":{ "slidesToShow": 2}},{"breakpoint":500, "settings":{ "slidesToShow": 1}}]}'>
                        <li>
                            <div class="testml-elem">
                                <div class="avata">
                                    <figure><img src="assets/images/about-us/author-01.png" alt="" width="217" height="217"></figure>
                                </div>
                                <b class="name">Ms.Chaymae</b>
                                <b class="title">Developer, Graceful Goods.</b>
                            </div>
                        </li>
                        <li>
                            <div class="testml-elem">
                                <div class="avata">
                                    <figure><img src="assets/images/about-us/author-02.png" alt="" width="217" height="217"></figure>
                                </div>
                                <b class="name">Mr. Braun</b>
                                <b class="title">Sales Manager, Graceful Goods.</b>
                            </div>
                        </li>
                        <li>
                            <div class="testml-elem">
                                <div class="avata">
                                    <figure><img src="assets/images/about-us/author-03.png" alt="" width="217" height="217"></figure>
                                </div>
                                <b class="name">Ms. Danien</b>
                                <b class="title">Marketing, Graceful Goods.</b>
                            </div>
                        </li>
                        <li>
                            <div class="testml-elem">
                                <div class="avata">
                                    <figure><img src="assets/images/about-us/avatar.jpg" alt="" width="217" height="217"></figure>
                                </div>
                                <b class="name">Mr. Hisoka</b>
                                <b class="title">Owner, Graceful Goods.</b>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

@endsection