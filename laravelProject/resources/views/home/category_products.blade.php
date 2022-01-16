
@extends('layouts.home')

@section('title', $data->title . ' Product List')

@section('description', $data->description)

@endsection

@section('keywords', $data->keywords)

@section('content')
    <div class="container">
        <div class="row" style="margin-top: 150px">
            <div class="col-md-12">
                <div class="product-filters">
                    <ul>
                        <li class="active" data-filter="*">All</li>
                        <li data-filter=".strawberry">Strawberry</li>
                        <li data-filter=".berry">Berry</li>
                        <li data-filter=".lemon">Lemon</li>
                    </ul>
                </div>
            </div>
        </div>
        @foreach($datalist as $rs)
        <div class="row product-lists">
            <div class="col-lg-4 col-md-6 text-center">
                <div class="single-product-item">
                    <div class="product-image">
                        <a href="#"><img src="{{ Storage::url($rs->image) }}" alt=""></a>
                    </div>
                    <h3>{{ $rs->title }}</h3>
                    <p class="product-price"><span>Per Kg</span>{{ $rs->price }}</p>
                    <a href="{{ route('product', ['id' => $rs->id]) }}" class="cart-btn"><i class="fas fa-shopping-cart"></i> İncele</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection
