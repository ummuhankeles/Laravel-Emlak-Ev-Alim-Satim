@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp
<!-- footer -->
<div class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="footer-box about-widget">
                    <h2 class="widget-title">Hakkımızda</h2>
                    <p>
                        Modern hayatı şekillendiren yeni keşiflerin öncülüğünü üstlenerek daha iyi bir yaşamın standartlarını oluşturmak için çalışan Doğuş Grubu, 1951 yılında kurulmuştur. Müşterilerinin yanı sıra çalışanları, iş ortakları ve hatta rakipleri için bir tutkuya dönüşecek, sınıfının en iyisi yaşam tarzı markalarını bünyesinde barındıran Doğuş, çalıştığı alanlarda küresel bir oyuncu olma hedefiyle çalışmalarına devam etmektedir.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="footer-box get-in-touch">
                    <h2 class="widget-title">Linkler</h2>
                    <ul>
                        <li><a href="{{ route('aboutus') }}">Hakkımızda</a></li>
                        <li><a href="{{ route('contact') }}">İletişim</a></li>
                        <li><a href="{{ route('reference') }}">Referanslar</a></li>
                        <li><a href="{{ route('faq') }}">Sık Sorulan Sorular</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="social-icons">
                    <h2 class="widget-title">Sosyal Medya</h2>
                    <ul>
                        @if($setting->facebook != null) <li><a href="{{ $setting->facebook }}" target="_blank"><i class="fab fa-facebook-f"></i></a></li> @endif
                        @if($setting->twitter != null) <li><a href="{{ $setting->twitter }}" target="_blank"><i class="fab fa-twitter"></i></a></li> @endif
                        @if($setting->instagram != null) <li><a href="{{ $setting->instagram }}" target="_blank"><i class="fab fa-instagram"></i></a></li> @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end footer -->

<!-- copyright -->
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <p>Copyrights &copy; 2021 - Ümmühan Keleş,  All Rights Reserved | {{ $setting->company }}</p>
            </div>
            <div class="col-lg-6 text-right col-md-12">
                <div class="social-icons">
                    <ul>
                        @if($setting->facebook != null) <li><a href="{{ $setting->facebook }}" target="_blank"><i class="fab fa-facebook-f"></i></a></li> @endif
                        @if($setting->twitter != null) <li><a href="{{ $setting->twitter }}" target="_blank"><i class="fab fa-twitter"></i></a></li> @endif
                        @if($setting->instagram != null) <li><a href="{{ $setting->instagram }}" target="_blank"><i class="fab fa-instagram"></i></a></li> @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end copyright -->

<!-- jquery -->
<script src="{{asset('assets')}}/js/jquery-1.11.3.min.js"></script>
<!-- bootstrap -->
<script src="{{asset('assets')}}/bootstrap/js/bootstrap.min.js"></script>
<!-- count down -->
<script src="{{asset('assets')}}/js/jquery.countdown.js"></script>
<!-- isotope -->
<script src="{{asset('assets')}}/js/jquery.isotope-3.0.6.min.js"></script>
<!-- waypoints -->
<script src="{{asset('assets')}}/js/waypoints.js"></script>
<!-- owl carousel -->
<script src="{{asset('assets')}}/js/owl.carousel.min.js"></script>
<!-- magnific popup -->
<script src="{{asset('assets')}}/js/jquery.magnific-popup.min.js"></script>
<!-- mean menu -->
<script src="{{asset('assets')}}/js/jquery.meanmenu.min.js"></script>
<!-- sticker js -->
<script src="{{asset('assets')}}/js/sticker.js"></script>
<!-- main js -->
<script src="{{asset('assets')}}/js/main.js"></script>
