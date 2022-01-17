@extends('Layouts.home')

@section('title', 'Sık Sorulan Sorular')

@section('content')
    <div class="container">
        <div style="margin-top: 120px">
            @foreach($datalist as $rs)
                <h5>{{ $rs->question }}</h5>
                {!! $rs->answer !!}
                <hr/>
            @endforeach
        </div>
    </div>
@endsection
