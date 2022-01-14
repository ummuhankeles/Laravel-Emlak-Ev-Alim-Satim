@extends('layouts.home')

@section('title', 'User Profile')

@section('content')
    <div class="container" style="margin-top: 150px">
        @include('profile.show')
    </div>
@endsection
