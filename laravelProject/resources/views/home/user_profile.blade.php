@extends('layouts.home')

@section('title', 'User Profile')

@section('content')
    <div class="container">
        @include('profile.show')
    </div>
@endsection
