@php
    $setting = \App\Http\Controllers\HomeController::getsetting();
@endphp

@extends('layouts.home')

@section('title', $data->title)

@section('description')
    {{ $data->description }}
@endsection

@section('keywords', $data->keywords)

@section('content')
    <!-- single product -->
    <div class="single-product mt-150 mb-150">
        <div class="container">
            <div class="row">
                @foreach($datalist as $rs)
                <div class="col-md-5">
                    <div class="single-product-img">
                        <img src="{{ Storage::url($rs->image)}}" alt="">
                    </div>
                </div>
                <div class="col-md-7">
                    <table class="table">
                        <tr>
                        </tr>
                        <th> Emlak Tipi </th><td>{{ $data->description }}</td>
                        <tr>
                        </tr>
                        <th> Fiyat </th><td>{{ $data->price }}</td>
                        <tr>
                        </tr>
                        <th> Brut </th><td>{{ $data->brut }}</td>
                        <tr>
                        </tr>
                        <th> Oda Sayısı </th><td>{{ $data->room_count }}</td>
                        <tr>
                        </tr>
                        <th> Aidat </th><td>{{ $data->dues }}</td>
                    </table>
                </div>
                @endforeach
            </div>

            // comment list
            <div class="comments-list-wrap">
                <h3 class="comment-count-title">
                    @php
                        $avrgrev = \App\Http\Controllers\HomeController::avrgreview($data->id);
                        $countrev = \App\Http\Controllers\HomeController::countreview($data->id);
                    @endphp
                    <div class="product-rating">
                        <i class="fa fa-star @if($avrgrev<1) -0 empty @endif"></i>
                        <i class="fa fa-star @if($avrgrev<2) -0 empty @endif"></i>
                        <i class="fa fa-star @if($avrgrev<3) -0 empty @endif"></i>
                        <i class="fa fa-star @if($avrgrev<4) -0 empty @endif"></i>
                        <i class="fa fa-star @if($avrgrev<5) -0 empty @endif"></i>
                    </div>
                    {{ $countrev }} Reviews {{ $avrgrev }}
                </h3>
                <div class="comment-list">
                    @foreach($reviews as $rs)
                    <div class="single-comment-body">
                        <div class="comment-user-avater">
                        </div>
                        <div class="comment-text-body">
                            <h4>{{ $rs->user->name }}<span class="comment-date">{{ $rs->created_at }}</span></h4>
                            <div class="product-rating">
                                <i class="fa fa-star @if($rs->rate<1) -0 empty @endif"></i>
                                <i class="fa fa-star @if($rs->rate<2) -0 empty @endif"></i>
                                <i class="fa fa-star @if($rs->rate<3) -0 empty @endif"></i>
                                <i class="fa fa-star @if($rs->rate<4) -0 empty @endif"></i>
                                <i class="fa fa-star @if($rs->rate<5) -0 empty @endif"></i>
                            </div>
                            <p>{{ $rs->subject }}</p>
                            <p>{{ $rs->review }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            // add comment
            @livewireScripts
            <div class="comment-template mt-5">
                <h4>Leave a comment</h4>
                <p>If you have a comment dont feel hesitate to send us your opinion.</p>
                @livewire('review', ['id' => $data->id])
            </div>
        </div>
    </div>
    <!-- end single product -->



@endsection
