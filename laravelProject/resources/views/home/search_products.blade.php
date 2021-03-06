
@extends('layouts.home')

@section('title', $search . ' Product List')

@section('content')
    <div class="container">
        <div class="row product-lists">
            @foreach($slider as $rs)
            <div class="col-lg-4 col-md-6 text-center">
                <div class="single-product-item">
                    <div class="product-image">
                        <a href="#"><img src="{{ Storage::url($rs->image) }}" alt=""></a>
                    </div>
                    <h3>{{ $rs->description }}</h3>
                    <p class="product-price">{{ $rs->price }}</p>
                    <a href="{{ route('product', ['id' => $rs->id]) }}" class="cart-btn"><i class="fas fa-shopping-cart"></i>Quick Now</a>
                </div>
            </div>
            @endforeach
        </div>

    </div>
@endsection
