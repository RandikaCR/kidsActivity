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
            <div class="images">
                <a href="#">
                    <img src="{{ asset('assets/frontend/images/product5.jpg') }}" alt="" title="">
                </a>
            </div>
            <div class="summary">
                <h2>Pretty Little Girl</h2>
                <p class="price">
                    <del>$120</del>
                    <span>$100</span>
                </p>
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo</p>
                <ul class="dt-sc-fancy-list gift">
                    <li>Lorem ipsum dolor sit euismod diam pulvinar massa nec augue</li>
                    <li>Praesent convallis nibh ollicitudin sit amet massa nec augue</li>
                    <li>Nullam ac sapien sit ac malesuada arca in aliquam odio inter</li>
                </ul>
                <form class="cart" method="post" action="#">
                    <div class="quantity buttons_added">
                        <input type='button' value='-' class='qtyminus'>
                        <input type='number' name='quantity' value='1' class='qty'>
                        <input type='button' value='+' class='qtyplus'>
                    </div>
                    <input type="hidden" name="add-to-cart" value="1146">
                    <button type="submit" class="dt-sc-button medium">Add to cart</button>
                </form>
                <div class="product_meta">
                    <span class="posted_in">Categories: <a href="#">Gosh</a></span>
                </div>
            </div>
            <div class="dt-sc-hr"></div>

            <div class="dt-sc-tabs-container">
                <ul class="dt-sc-tabs">
                    <li><a href="#"> Description </a></li>
                    <li><a href="#"> Reviews (5) </a></li>
                </ul>
                <div class="dt-sc-tabs-content">
                    <h2>Product Description</h2>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Sed tempus ligula ac mi iaculis lobortis. Nam consectetur justo non nisi dapibus, ac commodo mi sagittis. Integer enim odio. In lobortis rhoncus pulvinar. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas</p>
                </div>
                <div class="dt-sc-tabs-content">
                    <h2>4 Reviews for Pretty Little Girl</h2>
                    <div id="comments">
                        <ol class="commentlist">
                            <li>
                                <div class="comment_container">
                                    <img src="images/comment.jpg" alt="" title="">
                                </div>
                                <div class="comment-text">
                                    <div class="rating-review">
                                        <span class="author-rating rating-5"></span> <a href="#">5 reviews</a>
                                    </div>
                                    <p>Nam consectetur justo non nis dapibus, ac commodo mi sagittis. Integer enim odio. In lobortis rhoncus pulvinar. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                </div>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>

            <div class="related">
                <h2>Related Products</h2>
                <ul class="products">
                    <li class="dt-sc-one-third column first">
                        <div class="product-thumb">
                            <a href="{{ route('products.show', 1) }}">
                                <img src="{{ asset('assets/frontend/images/toys-games.jpg') }}" alt="" title="">
                            </a>
                            <div class="image-overlay">
                                <div class="product-button">
                                    <a href="#" class="add-cart-btn"> Add to cart </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-details">
                            <h5><a href="{{ route('products.show', 1) }}"> Ellents Style Grade </a></h5>
                            <span class="price"> $20.00 </span>
                        </div>
                    </li>
                    <li class="dt-sc-one-third column">
                        <div class="product-thumb">
                            <a href="{{ route('products.show', 1) }}">
                                <img src="{{ asset('assets/frontend/images/toys-games.jpg') }}" alt="" title="">
                            </a>
                            <div class="image-overlay">
                                <div class="product-button">
                                    <a href="#" class="add-cart-btn"> Add to cart </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-details">
                            <h5><a href="{{ route('products.show', 1) }}"> Ellents Style Grade </a></h5>
                            <span class="price"> $20.00 </span>
                        </div>
                    </li>
                    <li class="dt-sc-one-third column">
                        <div class="product-thumb">
                            <a href="{{ route('products.show', 1) }}">
                                <img src="{{ asset('assets/frontend/images/toys-games.jpg') }}" alt="" title="">
                            </a>
                            <div class="image-overlay">
                                <div class="product-button">
                                    <a href="#" class="add-cart-btn"> Add to cart </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-details">
                            <h5><a href="{{ route('products.show', 1) }}"> Ellents Style Grade </a></h5>
                            <span class="price"> $20.00 </span>
                        </div>
                    </li>
                </ul>
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


            <aside class="widget widget_categories">
                <h3 class="widgettitle">Sub Categories</h3>
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
