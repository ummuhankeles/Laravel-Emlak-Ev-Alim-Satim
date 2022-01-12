@extends('Layouts.admin')

@section('title', 'Add Category')

@section('content')

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Add Category</h3>
            </div>
            <div class="card-body">
                <form class="forms-sample" action="{{ route('admin_category_create') }}" method="post">
                    @csrf
                    <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Parent</label>
                        <div class="col-sm-9">
                            <select class="js-example-basic-single" name="parent_id" style="width:100%">
                                <option value="0" selected="selected">Main Category</option>
                                @foreach($datalist as $rs)
                                    <option value="{{$rs->id}}">{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title) }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Title</label>
                        <div class="col-sm-9">
                            <input type="text" name="title" class="form-control" id="exampleInputEmail2">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Keywords</label>
                        <div class="col-sm-9">
                            <input type="text" name="keywords" class="form-control" id="exampleInputEmail2">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Description</label>
                        <div class="col-sm-9">
                            <input type="text" name="description" class="form-control" id="exampleInputEmail2">
                        </div>
                    </div>
                    <div class="form-group row" >
                        <label for="exampleInputEmail2" name="status" class="col-sm-3 col-form-label">Status</label>
                        <div class="col-sm-9">
                            <select class="js-example-basic-single" style="width:100%">
                                <option selected="selected">False</option>
                                <option>True</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Add Category</button>
                    <button class="btn btn-dark">Cancel</button>
                </form>
            </div>
        </div>
    </div>
@endsection

