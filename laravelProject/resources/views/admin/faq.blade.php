@extends('Layouts.admin')

@section('title', 'Frequently Asked Question List')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a class="btn btn-block btn-info" href="{{ route('admin_faq_add') }}">Add FAQ</a>
            </div>
            <div class="card-body">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-dark">
                                    <thead>
                                    <tr>
                                        <th> Id </th>
                                        <th> Question </th>
                                        <th> Answer </th>
                                        <th> Status </th>
                                        <th> Edit </th>
                                        <th> Delete </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($datalist as $rs)
                                    <tr>
                                        <td>{{ $rs->id }}</td>
                                        <td>{{ $rs->question }}</td>
                                        <td>{!! $rs->answer !!}</td>
                                        <td>{{ $rs->status }}</td>
                                        <td><a href="{{ route('admin_faq_edit', ['id' => $rs->id]) }}">Edit</a></td>
                                        <td><a href="{{ route('admin_faq_delete', ['id' => $rs->id]) }}" onclick="return confirm('Are you Sure?')">Delete</a></td>
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
