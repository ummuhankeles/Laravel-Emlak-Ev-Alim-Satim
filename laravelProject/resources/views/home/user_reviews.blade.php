@extends('Layouts.home')

@section('title', 'Comment List')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-dark">
                                    <thead>
                                    <tr>
                                        <th> Id </th>
                                        <th> Product </th>
                                        <th> Subject </th>
                                        <th> Review </th>
                                        <th> Rate </th>
                                        <th> Status </th>
                                        <th> Date </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @include('home.message')
                                    @foreach($datalist as $rs)
                                        <tr>
                                            <td>{{ $rs->id }}</td>
                                            <td>
                                                <a href="{{ route('product', ['id' => $rs->product->id]) }}" target="_blank">
                                                    {{ $rs->product->title }}
                                                </a>
                                            </td>
                                            <td>{{ $rs->subject }}</td>
                                            <td>{{ $rs->review }}</td>
                                            <td>{{ $rs->rate }}</td>
                                            <td>{{ $rs->status }}</td>
                                            <td>{{ $rs->created_at }}</td>
                                            <td><a href="{{ route('admin_review_delete', ['id' => $rs->id]) }}" onclick="return confirm('Are you Sure?')">Delete</a></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
