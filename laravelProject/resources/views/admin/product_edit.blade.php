@extends('Layouts.admin')

@section('title', 'Add Category')

@section('content')

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Update Product</h3>
            </div>
            <div class="card-body">
                <form class="forms-sample" action="{{ route('admin_product_update', ['id' => $data->id]) }}" method="post">
                    @csrf
                    <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Parent</label>
                        <div class="col-sm-9">
                            <select class="js-example-basic-single" name="category_id" style="width:100%">
                                @foreach($datalist as $rs)
                                    <option value="{{$rs->id}}" @if($rs->id == $data->category_id) selected="selected" @endif>{{$rs->title}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Title</label>
                        <div class="col-sm-9">
                            <input type="text" name="title" value="{{$data->title}}" class="form-control" id="exampleInputEmail2">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Keywords</label>
                        <div class="col-sm-9">
                            <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control" id="exampleInputEmail2">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Description</label>
                        <div class="col-sm-9">
                            <input type="text" name="description" value="{{$data->description}}" class="form-control" id="exampleInputEmail2">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Price</label>
                        <div class="col-sm-9">
                            <input type="number" name="price" value="{{$data->price}}" class="form-control" id="exampleInputEmail2">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Detail</label>
                        <div class="col-sm-9">
                            <input type="number" name="detail" value="{{$data->detail}}" class="form-control" id="exampleInputEmail2">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Brut</label>
                        <div class="col-sm-9">
                            <input type="number" name="brut" value="{{$data->brut}}" class="form-control" id="exampleInputEmail2">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Room count</label>
                        <div class="col-sm-9">
                            <input type="number" name="room_count" value="{{$data->room_count}}" class="form-control" id="exampleInputEmail2">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Dues</label>
                        <div class="col-sm-9">
                            <input type="number" name="dues" value="{{$data->dues}}" class="form-control" id="exampleInputEmail2">
                        </div>
                    </div>
                    <div class="form-group row" >
                        <label for="exampleInputEmail2" name="status" class="col-sm-3 col-form-label">Status</label>
                        <div class="col-sm-9">
                            <select class="js-example-basic-single" style="width:100%">
                                <option selected="selected">{{$data->status}}</option>
                                <option>False</option>
                                <option>True</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Update Product</button>
                    <button class="btn btn-dark">Cancel</button>
                </form>
            </div>
        </div>
    </div>
@endsection
