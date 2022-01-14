<!-- header -->
<div class="top-header-area" id="sticker" style="background-color: #051922">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 text-center">
                <div class="main-menu-wrap">
                    <!-- logo -->
                    <div class="site-logo">
                        <a href="{{ route('home') }}">
                            <img src="{{asset('assets')}}/img/logo.png" alt="">
                        </a>
                    </div>
                    <!-- logo -->

                    <!-- menu start -->
                    <nav class="main-menu">
                        <ul>
                            <li class="current-list-item"><a href="{{ route('home') }}">Anasayfa</a></li>
                            <li><a href="#">Kategoriler</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Arsa</a></li>
                                    <li><a href="#">Konut</a></li>
                                    <li><a href="#">İş Yeri</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('aboutus') }}">Hakkımızda</a></li>
                            <li><a href="{{ route('reference') }}">Referanslar</a></li>
                            <li><a href="{{ route('contact') }}">İletişim</a></li>
                            @auth
                            <li><a href="#">{{ Auth::user()->name }}</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ route('myprofile') }}">Hesabım</a></li>
                                    <li><a href="{{ route('logout') }}">Çıkış Yap</a></li>
                                </ul>
                            </li>
                            @endauth
                            @guest
                            <li><a href="/login">Giriş Yap</a></li>
                            <li><a href="/register">Kaydol</a></li>
                            @endguest
                            <li>
                                <div class="header-icons">
                                    <a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                    <a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                    <div class="mobile-menu"></div>
                    <!-- menu end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end header -->

