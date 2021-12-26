@extends('Layouts.admin')

@section('title', 'Category List')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Category list</h3>
            </div>
            <div class="card-body">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-dark">
                                    <thead>
                                    <tr>
                                        <th> # </th>
                                        <th> Parent </th>
                                        <th> Title </th>
                                        <th> Status </th>
                                        <th> Edit </th>
                                        <th> Delete </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($datalist as $rs)
                                    <tr>
                                        <td>{{ $rs->id }}</td>
                                        <td>{{ $rs->parent_id }}</td>
                                        <td>{{ $rs->title }}</td>
                                        <td>{{ $rs->status }}</td>
                                        <td>Edit</td>
                                        <td>Delete</td>
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
