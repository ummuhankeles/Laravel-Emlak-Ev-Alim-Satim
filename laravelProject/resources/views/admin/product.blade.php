@extends('Layouts.admin')

@section('title', 'Category List')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a class="btn btn-block btn-info" href="{{ route('admin_product_add') }}">Add Product</a>
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
                                        <th> Image </th>
                                        <th> Category </th>
                                        <th> Title </th>
                                        <th> Keywords </th>
                                        <th> Description </th>
                                        <th> Price </th>
                                        <th> Detail </th>
                                        <th> Brut </th>
                                        <th> Room Count </th>
                                        <th> Dues </th>
                                        <th> Status </th>
                                        <th> Edit </th>
                                        <th> Delete </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($datalist as $rs)
                                    <tr>
                                        <td>{{ $rs->id }}</td>
                                        <td>{{ $rs->image }}</td>
                                        <td>{{ $rs->category_id }}</td>
                                        <td>{{ $rs->title }}</td>
                                        <td>{{ $rs->keywords }}</td>
                                        <td>{{ $rs->description }}</td>
                                        <td>{{ $rs->price }}</td>
                                        <td>{{ $rs->detail }}</td>
                                        <td>{{ $rs->brut }}</td>
                                        <td>{{ $rs->room_count }}</td>
                                        <td>{{ $rs->dues }}</td>
                                        <td>{{ $rs->status }}</td>
                                        <td><a href="{{ route('admin_product_edit', ['id' => $rs->id]) }}">Edit</a></td>
                                        <td><a href="{{ route('admin_product_delete', ['id' => $rs->id]) }}" onclick="return confirm('Are you Sure?')">Delete</a></td>
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
