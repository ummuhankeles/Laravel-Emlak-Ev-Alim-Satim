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
                                        <th> Id </th>
                                        <td> User Id </td>
                                        <th> Image </th>
                                        <th> Image Gallery </th>
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
                                        <td>{{ $rs->user_id }}</td>
                                        <td>
                                            @if ($rs->image)
                                                <img src="{{Storage::url($rs->image)}}" height="70" width="70" >
                                            @endif
                                        </td>
                                        <td><a href="{{ route('admin_image_add', ['home_id' => $rs->id]) }}" onclick="return !window.open(this.href, '', 'top=50 left=100 width=1100 height=700')" >
                                                <img src="{{asset('assets/admin/icons')}}/gallery.png" ></a>
                                        </td>
                                        <td>{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->category, $rs->category->title) }}</td>
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
