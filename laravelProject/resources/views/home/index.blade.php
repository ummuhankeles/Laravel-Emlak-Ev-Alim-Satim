@php
 $setting = \App\Http\Controllers\HomeController::getsetting()
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
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-news">
                        <a href="single-news.html"><div class="latest-news-bg news-bg-1"></div></a>
                        <div class="news-text-box">
                            <h3><a href="single-news.html">HEADER</a></h3>
                            <a href="single-news.html" class="read-more-btn">daha fazla <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-news">
                        <a href="single-news.html"><div class="latest-news-bg news-bg-2"></div></a>
                        <div class="news-text-box">
                            <h3><a href="single-news.html">HEADER</a></h3>
                            <a href="single-news.html" class="read-more-btn">daha fazla <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                    <div class="single-latest-news">
                        <a href="single-news.html"><div class="latest-news-bg news-bg-3"></div></a>
                        <div class="news-text-box">
                            <h3><a href="single-news.html">HEADER</a></h3>
                            <a href="single-news.html" class="read-more-btn">daha fazla <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-news">
                        <a href="single-news.html"><div class="latest-news-bg news-bg-4"></div></a>
                        <div class="news-text-box">
                            <h3><a href="single-news.html">HEADER</a></h3>
                            <a href="single-news.html" class="read-more-btn">daha fazla <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-news">
                        <a href="single-news.html"><div class="latest-news-bg news-bg-5"></div></a>
                        <div class="news-text-box">
                            <h3><a href="single-news.html">HEADER</a></h3>
                            <a href="single-news.html" class="read-more-btn">daha fazla <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                    <div class="single-latest-news">
                        <a href="single-news.html"><div class="latest-news-bg news-bg-6"></div></a>
                        <div class="news-text-box">
                            <h3><a href="single-news.html">HEADER</a></h3>
                            <a href="single-news.html" class="read-more-btn">daha fazla <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
