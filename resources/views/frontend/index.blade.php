@extends('layouts.frontend')

@section('content')

    @include('partials.frontend.banner')

    <section id="primary" class="content-full-width">

        <div class="container main-categories">
            <h2 class="text-center mb-40">With Music4Kids, music is child's play!</h2>
            <div class="dt-sc-one-fourth column first main-categories-child">
                <div class="dt-sc-ico-content type1 ">
                    <div class="product-thumb">
                        <a href="#">
                            <a href="{{ url('/category') }}"><img src="{{ asset('assets/frontend/images/toys-games.jpg') }}" alt="" title=""></a>
                        </a>
                        <div class="image-overlay">
                            <div class="view-btn">
                                <a href="{{ url('/category') }}"> View </a>
                            </div>
                        </div>
                    </div>
                    <h4 class="text-center mt-20"><a href="{{ url('/category') }}"> Learning folders </a></h4>
                    <p>Curabitur ultrices posuere mattis. Nam ullamcorper, diam sit amet euismod pelleo ntesque, eros risus rhoncus libero, invest tibulum nisl ligula</p>
                </div>
            </div>
            <div class="dt-sc-one-fourth column main-categories-child">
                <div class="dt-sc-ico-content type1 ">
                    <div class="product-thumb">
                        <a href="#">
                            <a href="{{ url('/category') }}"><img src="{{ asset('assets/frontend/images/toys-games.jpg') }}" alt="" title=""></a>
                        </a>
                        <div class="image-overlay">
                            <div class="view-btn">
                                <a href="{{ url('/category') }}"> View </a>
                            </div>
                        </div>
                    </div>
                    <h4 class="text-center mt-20"><a href="{{ url('/category') }}"> Flashcards </a></h4>
                    <p>Curabitur ultrices posuere mattis. Nam ullamcorper, diam sit amet euismod pelleo ntesque, eros risus rhoncus libero, invest tibulum nisl ligula</p>
                </div>
            </div>
            <div class="dt-sc-one-fourth column main-categories-child">
                <div class="dt-sc-ico-content type1 ">
                    <div class="product-thumb">
                        <a href="#">
                            <a href="{{ url('/category') }}"><img src="{{ asset('assets/frontend/images/toys-games.jpg') }}" alt="" title=""></a>
                        </a>
                        <div class="image-overlay">
                            <div class="view-btn">
                                <a href="{{ url('/category') }}"> View </a>
                            </div>
                        </div>
                    </div>
                    <h4 class="text-center mt-20"><a href="{{ url('/category') }}"> books </a></h4>
                    <p>Curabitur ultrices posuere mattis. Nam ullamcorper, diam sit amet euismod pelleo ntesque, eros risus rhoncus libero, invest tibulum nisl ligula</p>
                </div>
            </div>
            <div class="dt-sc-one-fourth column main-categories-child">
                <div class="dt-sc-ico-content type1 ">
                    <div class="product-thumb">
                        <a href="#">
                            <a href="{{ url('/category') }}"><img src="{{ asset('assets/frontend/images/toys-games.jpg') }}" alt="" title=""></a>
                        </a>
                        <div class="image-overlay">
                            <div class="view-btn">
                                <a href="{{ url('/category') }}"> View </a>
                            </div>
                        </div>
                    </div>
                    <h4 class="text-center mt-20"><a href="{{ url('/category') }}"> Educational toys </a></h4>
                    <p>Curabitur ultrices posuere mattis. Nam ullamcorper, diam sit amet euismod pelleo ntesque, eros risus rhoncus libero, invest tibulum nisl ligula</p>
                </div>
            </div>
        </div>

        <div class="dt-sc-hr"></div>

        <section class="fullwidth-background dt-sc-parallax-section turquoise-bg">

            <div class="container">
                <h2 class="dt-sc-hr-white-title">Recent Products</h2>
                <ul class="products">
                    <li class="dt-sc-one-fourth column first">
                        <div class="product-thumb">
                            <a href="{{ url('/category') }}">
                                <img src="{{ asset('assets/frontend/images/toys-games.jpg') }}" alt="" title="">
                            </a>
                            <div class="image-overlay">
                                <div class="product-button">
                                    <a href="#" class="add-cart-btn"> Add to cart </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-details">
                            <h5><a href="{{ url('/category') }}"> Ellents Style Grade </a></h5>
                            <span class="price"> $20.00 </span>
                        </div>
                    </li>
                    <li class="dt-sc-one-fourth column">
                        <div class="product-thumb">
                            <a href="{{ url('/category') }}">
                                <img src="{{ asset('assets/frontend/images/toys-games.jpg') }}" alt="" title="">
                            </a>
                            <div class="image-overlay">
                                <div class="product-button">
                                    <a href="#" class="add-cart-btn"> Add to cart </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-details">
                            <h5><a href="{{ url('/category') }}"> Ellents Style Grade </a></h5>
                            <span class="price"> $20.00 </span>
                        </div>
                    </li>
                    <li class="dt-sc-one-fourth column">
                        <div class="product-thumb">
                            <a href="{{ url('/category') }}">
                                <img src="{{ asset('assets/frontend/images/toys-games.jpg') }}" alt="" title="">
                            </a>
                            <div class="image-overlay">
                                <div class="product-button">
                                    <a href="#" class="add-cart-btn"> Add to cart </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-details">
                            <h5><a href="{{ url('/category') }}"> Ellents Style Grade </a></h5>
                            <span class="price"> $20.00 </span>
                        </div>
                    </li>
                    <li class="dt-sc-one-fourth column">
                        <div class="product-thumb">
                            <a href="{{ url('/category') }}">
                                <img src="{{ asset('assets/frontend/images/toys-games.jpg') }}" alt="" title="">
                            </a>
                            <div class="image-overlay">
                                <div class="product-button">
                                    <a href="#" class="add-cart-btn"> Add to cart </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-details">
                            <h5><a href="{{ url('/category') }}"> Ellents Style Grade </a></h5>
                            <span class="price"> $20.00 </span>
                        </div>
                    </li>
                </ul>
            </div>

        </section>


        <div class="dt-sc-hr"></div>

        <div class="container">
            <h2 class="dt-sc-hr-green-title">Our Portfolio</h2>

            <div class="front-portfolio-container">
                <div class="portfolio-content portfolio-content1">
                    <div class="front-portfolio">
                        <div class="portfolio-outer">
                            <div class="portfolio-thumb">
                                <img src="{{ asset('assets/frontend/images/image1.jpg') }}" alt="" title="">
                                <div class="image-overlay">
                                    <h5><a href="portfolio-detail.html">Gifts at Large</a></h5>
                                    <a href="portfolio-detail.html" class="link"><span class="fa fa-link"></span></a>
                                    <a href="{{ asset('assets/frontend/images/image1.jpg') }}" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-search"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portfolio-content portfolio-content2">
                    <div class="front-portfolio">
                        <div class="portfolio-outer">
                            <div class="portfolio-thumb">
                                <img src="{{ asset('assets/frontend/images/image2.jpg') }}" alt="" title="">
                                <div class="image-overlay">
                                    <h5><a href="portfolio-detail.html">Gifts at Large</a></h5>
                                    <a href="portfolio-detail.html" class="link"><span class="fa fa-link"></span></a>
                                    <a href="images/image2.jpg') }}" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-search"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portfolio-content portfolio-content3">
                    <div class="front-portfolio">
                        <div class="portfolio-outer">
                            <div class="portfolio-thumb">
                                <img src="{{ asset('assets/frontend/images/image3.jpg') }}" alt="" title="">
                                <div class="image-overlay">
                                    <h5><a href="portfolio-detail.html">Gifts at Large</a></h5>
                                    <a href="portfolio-detail.html" class="link"><span class="fa fa-link"></span></a>
                                    <a href="{{ asset('assets/frontend/images/image3.jpg') }}" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-search"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portfolio-content portfolio-content4">
                    <div class="front-portfolio">
                        <div class="portfolio-outer">
                            <div class="portfolio-thumb">
                                <img src="{{ asset('assets/frontend/images/image4.jpg') }}" alt="" title="">
                                <div class="image-overlay">
                                    <h5><a href="portfolio-detail.html">Gifts at Large</a></h5>
                                    <a href="portfolio-detail.html" class="link"><span class="fa fa-link"></span></a>
                                    <a href="{{ asset('assets/frontend/images/image4.jpg') }}" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-search"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portfolio-content portfolio-content5">
                    <div class="front-portfolio">
                        <div class="portfolio-outer">
                            <div class="portfolio-thumb">
                                <img src="{{ asset('assets/frontend/images/image5.jpg') }}" alt="" title="">
                                <div class="image-overlay">
                                    <h5><a href="portfolio-detail.html">Gifts at Large</a></h5>
                                    <a href="portfolio-detail.html" class="link"><span class="fa fa-link"></span></a>
                                    <a href="{{ asset('assets/frontend/images/image5.jpg') }}" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-search"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portfolio-content portfolio-content6">
                    <div class="front-portfolio">
                        <div class="portfolio-outer">
                            <div class="portfolio-thumb">
                                <img src="{{ asset('assets/frontend/images/image6.jpg') }}" alt="" title="">
                                <div class="image-overlay">
                                    <h5><a href="portfolio-detail.html">Gifts at Large</a></h5>
                                    <a href="portfolio-detail.html" class="link"><span class="fa fa-link"></span></a>
                                    <a href="{{ asset('assets/frontend/images/image6.jpg') }}" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-search"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portfolio-content portfolio-content7">
                    <div class="front-portfolio">
                        <div class="portfolio-outer">
                            <div class="portfolio-thumb">
                                <img src="{{ asset('assets/frontend/images/image7.jpg') }}" alt="" title="">
                                <div class="image-overlay">
                                    <h5><a href="portfolio-detail.html">Gifts at Large</a></h5>
                                    <a href="portfolio-detail.html" class="link"><span class="fa fa-link"></span></a>
                                    <a href="{{ asset('assets/frontend/images/image7.jpg') }}" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-search"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dt-sc-hr-small"></div>
                <div class="aligncenter">
                    <a href="#" class="dt-sc-button medium mustard"> Hit here to view all <span class="fa fa-chevron-circle-right"> </span></a>
                </div>
            </div>

        </div>

        <div class="dt-sc-hr"></div>

        <section class="fullwidth-background dt-sc-parallax-section orange-bg">

            <div class="container">
                <h2 class="dt-sc-hr-white-title">Recent Blog</h2>

                <div class="column dt-sc-one-half first">
                    <article class="blog-entry">
                        <div class="blog-entry-inner">
                            <div class="entry-meta">
                                <a href="blog-detail.html" class="blog-author"><img src="{{ asset('assets/frontend/images/rounded-bg-img.jpg') }}" alt="" title=""></a>
                                <div class="date">
                                    <span> 27 </span>
                                    <p> Aug <br> 2014 </p>
                                </div>
                                <a href="#" class="comments">
                                    12 <span class="fa fa-comment"> </span>
                                </a>
                                <a href="#" class="entry_format"><span class="fa fa-picture-o"></span></a>
                            </div>
                            <div class="entry-thumb">
                                <a href="blog-detail.html"><img src="{{ asset('assets/frontend/images/blog_img1.jpg') }}" alt="" title=""></a>
                            </div>
                            <div class="entry-details">
                                <div class="entry-title">
                                    <h3><a href="blog-detail.html"> Activities Improves Mind </a></h3>
                                </div>

                                <div class="entry-body">
                                    <p>Roin bibendum nibhsds. Nuncsdsd fermdada msit ametadasd consequat. Praes porr nulla sit amet dui lobortis, id venenatis nibh accums.</p>
                                </div>
                                <a href="blog-detail.html" class="dt-sc-button small"> Read More <span class="fa fa-chevron-circle-right"> </span></a>
                            </div>
                        </div>
                    </article>
                </div>

                <div class="column dt-sc-one-half">
                    <article class="blog-entry">
                        <div class="blog-entry-inner">
                            <div class="entry-meta">
                                <a href="blog-detail.html" class="blog-author"><img src="{{ asset('assets/frontend/images/rounded-bg-img.jpg') }}" alt="" title=""></a>
                                <div class="date">
                                    <span> 27 </span>
                                    <p> Aug <br> 2014 </p>
                                </div>
                                <a href="#" class="comments">
                                    12 <span class="fa fa-comment"> </span>
                                </a>
                                <a href="#" class="entry_format"><span class="fa fa-picture-o"></span></a>
                            </div>
                            <div class="entry-thumb">
                                <a href="blog-detail.html"><img src="{{ asset('assets/frontend/images/blog_img2.jpg') }}" alt="" title=""></a>
                            </div>
                            <div class="entry-details">
                                <div class="entry-title">
                                    <h3><a href="blog-detail.html"> Weekly Reader Zone </a></h3>
                                </div>

                                <div class="entry-body">
                                    <p>Iid venenatis nibh accums. Doinbibe ndum nibhsds. Nuncsdsd fermdada msit ametadasd consequat. Praes porr nulla sit amet dui lobortis, id venenatis nibh accumsan...</p>
                                </div>
                                <a href="blog-detail.html" class="dt-sc-button small"> Read More <span class="fa fa-chevron-circle-right"> </span></a>
                            </div>
                        </div>
                    </article>
                </div>


            </div>

        </section>

        <div class="dt-sc-hr"></div>

    </section>

@endsection
