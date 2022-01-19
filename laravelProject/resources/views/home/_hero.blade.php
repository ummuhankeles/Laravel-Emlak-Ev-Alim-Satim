
@php
    $sliders = \App\Http\Controllers\HomeController::categoryList()
@endphp


<!-- home page slider -->
<div class="homepage-slider" @if(!isset($page)) hidden @endif>
    <!-- single home slider -->
    @php
        $i = 0;
    @endphp
    @foreach($sliders as $rs)
        @php
            $i += 1;
        @endphp
    <div @if($i==1) active @endif>
        <img src="{{ Storage::url($rs->image) }}">
        {{--<div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-7 offset-lg-1 offset-xl-0">
                    <div class="hero-text">
                        <div class="hero-text-tablecell">
                            <h1></h1>
                            <div class="hero-btns">
                                <a href="{{ route('product', ['id',$rs->id]) }}" class="boxed-btn">Visit Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>--}}
    </div>
    @endforeach
</div>
<!-- end home page slider -->

{{--
<div>
    <h1>{{ $rs->price }}</h1>
    <a href="{{ route('product', ['id',$rs->id]) }}" class="boxed-btn">Visit Now</a>
</div>--}}
