<!-- Header section -->
<header class="header-section">
    <div class="logo">
        <img src="img/logo.png" alt=""><!-- Logo -->
    </div>
    <!-- Navigation -->
    <div class="responsive"><i class="fa fa-bars"></i></div>
    <nav>
        <ul class="menu-list">
            <li class="{{request()->is('/') ? "active":null}}">
                <a href="/">{{$nav->nav1}}</a>
            </li>
            <li class="{{request()->is('services') ? "active":null}}">
                <a href="/services">{{$nav->nav2}}</a>
            </li>
            <li class="{{request()->is('blog*') ? "active":null}}">
                <a href="/blog">{{$nav->nav3}}</a>
            </li>
            <li class="{{request()->is('contact') ? "active":null}}">
                <a href="/contact">{{$nav->nav4}}</a>
            </li>
        </ul>
    </nav>
</header>
<!-- Header section end -->