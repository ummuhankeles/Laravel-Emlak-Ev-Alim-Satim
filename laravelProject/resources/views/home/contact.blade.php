@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp

@extends('layouts.home')

@section('title', 'Contact - '. $setting->title)

@section('description')
    {{ $setting->description }}
@endsection

@section('keywords', $setting->keywords)

@section('content')
    <div class="container" style="margin-top: 150px">
        <div class="row">
            <div class="col-md-6">
                {!! $setting->contact !!}
            </div>
            <div class="col-md-6">
                iletişim formu
            </div>
        </div>
    </div>
@endsection
