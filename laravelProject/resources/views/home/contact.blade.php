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
                <h3 class="text-center">İletişim Formu</h3>
                @include('home.message')
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <div class="billing-address-form">
                            <form action="{{ route('sendmessage') }}" method="post">
                                @csrf
                                <p><input type="text" name="name" placeholder="Name & Surname"></p>
                                <p><input type="text" name="subject" placeholder="Subject"></p>
                                <p><input type="email" name="email" placeholder="Email"></p>
                                <p><input type="tel" name="phone" placeholder="Phone"></p>
                                <p><textarea name="message" id="bill" cols="30" rows="10" placeholder="Say Something"></textarea></p>
                                <button type="submit" class="boxed-btn mt-2">Send Message</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
