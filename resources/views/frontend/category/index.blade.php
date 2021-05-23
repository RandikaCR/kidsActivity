@extends('layouts.frontend')

@section('content')

    <div class="breadcrumb-section">
        <div class="container">
            <h1>Learning folders</h1>
            <div class="breadcrumb">
                <a href="{{ url('/') }}">Learning folders</a>
                <span class="fa fa-angle-double-right"></span>
                <span class="current">Learning folders</span>
            </div>
        </div>
    </div>



    <div class="container">

        <section id="primary" class="with-sidebar pb-80">
            <ul class="products">
                <li class="dt-sc-one-third column first">
                    <div class="product-thumb">
                        <a href="{{ route('products.index', ['category' => 1]) }}">
                            <img src="{{ asset('assets/frontend/images/toys-games.jpg') }}" alt="" title="">
                        </a>
                        <div class="image-overlay">
                            <div class="product-button">
                                <a href="{{ route('products.index', ['category' => 1]) }}" class="add-cart-btn"> View </a>
                            </div>
                        </div>
                    </div>
                    <div class="product-details">
                        <h4 class="text-center"><a href="{{ route('products.index', ['category' => 1]) }}"> Learning folders  </a></h4>
                    </div>
                </li>
                <li class="dt-sc-one-third column">
                    <div class="product-thumb">
                        <a href="{{ route('products.index', ['category' => 1]) }}">
                            <img src="{{ asset('assets/frontend/images/toys-games.jpg') }}" alt="" title="">
                        </a>
                        <div class="image-overlay">
                            <div class="product-button">
                                <a href="{{ route('products.index', ['category' => 1]) }}" class="add-cart-btn"> View </a>
                            </div>
                        </div>
                    </div>
                    <div class="product-details">
                        <h4 class="text-center"><a href="{{ route('products.index', ['category' => 1]) }}"> Learning folders  </a></h4>
                    </div>
                </li>
            </ul>

            <div class="pagination">
                <div class="prev-post"></div>
                <ul>
                    <li class="active-page">1</li>
                    <li><a href="#" class="inactive">2</a></li>
                </ul>
                <div class="next-post"><a href="#">Next <span class="fa fa-angle-double-right"></span></a></div>
            </div>

        </section>

        <section id="secondary">
            <aside class="widget widget_categories">
                <h3 class="widgettitle">Categories</h3>
                <ul>
                    <li class="font-bold">
                        <a href="#">Learning folders<span>(16)</span></a>
                    </li>
                    <li class="">
                        <a href="#">Flashcards<span>(3)</span></a>
                    </li>
                    <li class="">
                        <a href="#">books<span>(26)</span></a>
                    </li>
                    <li class="">
                        <a href="#">Educational toys<span>(18)</span></a>
                    </li>
                </ul>
            </aside>
        </section>

    </div>

@endsection
