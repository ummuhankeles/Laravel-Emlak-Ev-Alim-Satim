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
        </div>
    </div>
    <!-- end single product -->

@endsection
