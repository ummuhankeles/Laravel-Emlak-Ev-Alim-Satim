@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp

@extends('layouts.home')

@section('title', 'References - '. $setting->title)

@section('description')
    {{ $setting->description }}
@endsection

@section('keywords', $setting->keywords)

@section('content')
    <div class="container" style="margin-top: 150px">
        <p>
            {!! $setting->references !!}
        </p>
    </div>
@endsection
