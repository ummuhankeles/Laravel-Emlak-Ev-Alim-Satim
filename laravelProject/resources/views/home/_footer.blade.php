<!-- footer -->
<div class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="footer-box about-widget">
                    <h2 class="widget-title">Hakkımızda</h2>
                    <p>Ut enim ad minim veniam perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="footer-box get-in-touch">
                    <h2 class="widget-title">İletişim</h2>
                    <ul>
                        <li>34/8, East Hukupara, Gifirtok, Sadan.</li>
                        <li>support@fruitkha.com</li>
                        <li>+00 111 222 3333</li>
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
