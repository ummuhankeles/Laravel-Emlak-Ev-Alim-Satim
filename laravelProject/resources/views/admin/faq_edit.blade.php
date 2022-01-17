@extends('Layouts.admin')

@section('title', 'Add Category')

@section('javascript')
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
@endsection

@section('content')

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Update FAQ</h3>
            </div>
            <div class="card-body">
                <form class="forms-sample" action="{{ route('admin_faq_update', ['id' => $data->id]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Question</label>
                        <div class="col-sm-9">
                            <input type="text" name="question" value="{{$data->question}}" class="form-control" id="exampleInputEmail2">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Answer</label>
                        <div class="col-sm-9">
                            <textarea name="answer">{{ $data->answer }}</textarea>
                            <script>
                                CKEDITOR.replace( 'answer' );
                            </script>
                        </div>
                    </div>
                    <div class="form-group row" >
                        <label for="exampleInputEmail2"  class="col-sm-3 col-form-label">Status</label>
                        <div class="col-sm-9">
                            <select name="status" class="js-example-basic-single" style="width:100%">
                                <option selected="selected">{{$data->status}}</option>
                                <option>False</option>
                                <option>True</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Update FAQ</button>
                    <button class="btn btn-dark">Cancel</button>
                </form>
            </div>
        </div>
    </div>
@endsection

