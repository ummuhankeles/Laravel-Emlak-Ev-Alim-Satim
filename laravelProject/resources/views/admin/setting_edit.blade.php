@extends('Layouts.admin')

@section('title', 'Add Category')

@section('javascript')
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
@endsection

@section('content')

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit Setting</h3>
            </div>
            <div class="card-body">
                <form class="forms-sample" action="{{ route('admin_setting_update') }}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{$data->id}}" class="form-control" id="exampleInputEmail2">
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
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Company</label>
                        <div class="col-sm-9">
                            <input type="text" name="company" value="{{$data->company}}" class="form-control" id="exampleInputEmail2">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Address</label>
                        <div class="col-sm-9">
                            <input type="text" name="address" value="{{$data->address}}" class="form-control" id="exampleInputEmail2">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Phone</label>
                        <div class="col-sm-9">
                            <input type="number" name="phone" value="{{$data->phone}}" class="form-control" id="exampleInputEmail2">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Fax</label>
                        <div class="col-sm-9">
                            <input type="number" name="fax" value="{{$data->fax}}" class="form-control" id="exampleInputEmail2">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="email" name="email" value="{{$data->email}}" class="form-control" id="exampleInputEmail2">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Smtp Server</label>
                        <div class="col-sm-9">
                            <input type="text" name="smtpserver" value="{{$data->smtpserver}}" class="form-control" id="exampleInputEmail2">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Smtp Email</label>
                        <div class="col-sm-9">
                            <input type="text" name="smtpemail" value="{{$data->smtpemail}}" class="form-control" id="exampleInputEmail2">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Smtp Password</label>
                        <div class="col-sm-9">
                            <input type="password" name="smtppassword" value="{{$data->smtppassword}}" class="form-control" id="exampleInputEmail2">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Smtp Port</label>
                        <div class="col-sm-9">
                            <input type="number" name="smtpport" value="{{$data->smtpport}}" class="form-control" id="exampleInputEmail2">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">About Us</label>
                        <div class="col-sm-9">
                            <input type="text" name="aboutus" value="{{$data->aboutus}}" class="form-control" id="exampleInputEmail2">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Contact</label>
                        <div class="col-sm-9">
                            <input type="text" name="contact" value="{{$data->contact}}" class="form-control" id="exampleInputEmail2">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Facebook</label>
                        <div class="col-sm-9">
                            <input type="text" name="facebook" value="{{$data->facebook}}" class="form-control" id="exampleInputEmail2">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Instagram</label>
                        <div class="col-sm-9">
                            <input type="text" name="instagram" value="{{$data->instagram}}" class="form-control" id="exampleInputEmail2">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Twitter</label>
                        <div class="col-sm-9">
                            <input type="text" name="twitter" value="{{$data->twitter}}" class="form-control" id="exampleInputEmail2">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">References</label>
                        <div class="col-sm-9">
                            <textarea name="references"></textarea>
                        </div>
                    </div>
                    <script>
                        CKEDITOR.replace( 'references' );
                    </script>
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
                    <button type="submit" class="btn btn-primary me-2">Edit Setting</button>
                    <button class="btn btn-dark">Cancel</button>
                </form>
            </div>
        </div>
    </div>
@endsection

