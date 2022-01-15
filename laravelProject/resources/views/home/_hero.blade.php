<!-- hero area
<div class="hero-area hero-bg" @if(!isset($page)) hidden @endif>
    <div class="container">
        <div class="row">
            <div class="col-lg-9 offset-lg-2 text-center">
                <div class="hero-text">
                    <div class="hero-text-tablecell">
                        <p class="subtitle">Emlak & Konut</p>
                        <h1>Türkiyenin En Güvenilir Emlak Ticaret Sitesi </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
end hero area -->

<!-- home page slider -->
<div class="homepage-slider" @if(!isset($page)) hidden @endif>
    <!-- single home slider -->
    @foreach($slider as $rs)
    <div class="single-homepage-slider homepage-bg-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-7 offset-lg-1 offset-xl-0">
                    <div class="hero-text">
                        <div class="hero-text-tablecell">
                            <p class="subtitle">Fresh & Organic</p>
                            <h1>Delicious Seasonal Fruits</h1>
                            <div class="hero-btns">
                                <a href="{{ route('product', ['id',$rs->id]) }}" class="boxed-btn">Visit Now</a>
                                <a href="contact.html" class="bordered-btn">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

<!-- end home page slider -->
