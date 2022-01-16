@php
     $setting = \App\Http\Controllers\HomeController::getsetting();
    $slider = \App\Http\Controllers\HomeController::categoryList()
@endphp

@extends('layouts.home')

@section('title', $setting->title)

@section('description')
    {{ $setting->description }}
@endsection

@section('keywords', $setting->keywords)

@section('content')
    <div class="latest-news pt-150 pb-150">
        <div class="container">
            <div class="row">
                @foreach($daily as $rs)
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-news">
                        <a href="single-news.html"><div class="latest-news-bg news-bg-1"></div></a>
                        <div class="news-text-box">
                            <h3><a href="single-news.html">{{$rs->description}}</a></h3>
                            <a href="{{ route('product', ['id' => $rs->id]) }}" class="read-more-btn">daha fazla <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
