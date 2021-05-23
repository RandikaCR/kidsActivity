<header>
    <div class="container">
        <div class="logo">
            <a href="{{ url('/') }}" title="Kids Life"><img src="{{ asset('assets/frontend/images/logo.png') }}" alt="Kids Activity Club" title="Kids Activity Club"></a>
        </div>
        <div class="contact-details">
            <p class="mail">
                <a href="mailto:info@kidsactivity.lk"><span class="">info@kidsactivity.lk</span></a>
                <span class="fa fa-envelope"></span>
            </p>
            <p class="phone-no">
                <i>+1 959 552 5963</i>
                <span class="fa fa-phone"></span>
            </p>
        </div>
    </div>

    <div id="menu-container">
        <div class="container">

            <nav id="main-menu">
                <div class="dt-menu-toggle" id="dt-menu-toggle">Menu<span class="dt-menu-toggle-icon"></span></div>
                <ul id="menu-main-menu" class="menu">
                    <li class="red current_page_item"> <a href="{{ url('/') }}"> Home </a> </li>
                    <li class="yellow"> <a href="{{ url('/') }}"> Protfolio </a> </li>
                    <li class="menu-item-simple-parent menu-item-depth-0 lavender"><a href="{{ url('/') }}" title="">Products</a>
                        <ul class="sub-menu">
                            <li><a href="{{ url('/') }}">Blog Two Column</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ url('/') }}">With Sidebar</a></li>
                                </ul>
                                <a class="dt-menu-expand">+</a>
                            </li>
                            <li><a href="{{ url('/') }}">Blog One Column</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ url('/') }}">With Sidebar</a></li>
                                </ul>
                                <a class="dt-menu-expand">+</a>
                            </li>
                        </ul>
                        <a class="dt-menu-expand">+</a>
                    </li>
                    <li class="menu-item-simple-parent menu-item-depth-0 blue"><a href="{{ url('/') }}" title="">Services</a>
                        <ul class="sub-menu">
                            <li><a href="{{ url('/') }}">Portfolio Four Column</a></li>
                            <li><a href="{{ url('/') }}">Portfolio Three Column</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ url('/') }}">With Sidebar</a></li>
                                </ul>
                                <a class="dt-menu-expand">+</a>
                            </li>
                        </ul>
                        <a class="dt-menu-expand">+</a>
                    </li>
                    <li class="purple"><a href="{{ url('/') }}" title="">Blog</a></li>
                    <li class="mustard"> <a href="{{ url('/') }}"> About us </a> </li>
                    <li class="pink"><a href="{{ url('/') }}" title="">Contact us</a></li>
                </ul>
            </nav>

            <ul class="dt-sc-social-icons">
                <li><a href="#" title="Facebook" class="dt-sc-tooltip-top facebook"><span class="fa fa-facebook"></span></a></li>
                <li><a href="#" title="Instagram" class="dt-sc-tooltip-top instagram"><span class="fa fa-instagram"></span></a></li>
            </ul>
        </div>
    </div>

</header>
