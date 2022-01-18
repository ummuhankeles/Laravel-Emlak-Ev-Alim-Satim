@extends('Layouts.admin')

@section('title', 'User Edit')

@section('javascript')
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
@endsection

@section('content')

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Update Product</h3>
            </div>
            <div class="card-body">
                <form class="forms-sample" action="{{ route('admin_user_update', ['id' => $data->id]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Image</label>
                        <div class="col-sm-9">
                            <input type="file" name="image" class="form-control" id="exampleInputEmail2">

                            @if ($data->profile_photo_path)
                                <img src="{{Storage::url($data->profile_photo_path)}}" height="70" width="70" >
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="name" value="{{$data->name}}" class="form-control" id="exampleInputEmail2">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="text" name="email" value="{{$data->email}}" class="form-control" id="exampleInputEmail2">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Phone</label>
                        <div class="col-sm-9">
                            <input type="text" name="phone" value="{{$data->phone}}" class="form-control" id="exampleInputEmail2">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Address</label>
                        <div class="col-sm-9">
                            <input type="number" name="address" value="{{$data->address}}" class="form-control" id="exampleInputEmail2">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Update</button>
                    <button class="btn btn-dark">Cancel</button>
                </form>
            </div>
        </div>
    </div>
@endsection

