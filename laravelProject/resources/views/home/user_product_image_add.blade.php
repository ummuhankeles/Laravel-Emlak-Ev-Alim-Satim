<html>
<head>
    <title>Image Gallery</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('assets')}}/admin/images/favicon.png" />
</head>
<body>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{$data->title}}</h3>
        </div>
        <div class="card-body">
            <form class="forms-sample" action="{{ route('user_image_store', ['home_id' => $data->id]) }}" method="post" enctype="multipart/form-data" >
                @csrf
                <div class="form-group row">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Title</label>
                    <div class="col-sm-9">
                        <input type="text" name="title" class="form-control" id="exampleInputEmail2">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Image</label>
                    <div class="col-sm-9">
                        <input type="file" name="image" class="form-control" id="exampleInputEmail2">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary me-2">Add Image</button>
                <button class="btn btn-dark">Cancel</button>
            </form>

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-dark">
                                <thead>
                                <tr>
                                    <th> # </th>
                                    <th> Image </th>
                                    <th> Title </th>
                                    <th> Delete </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($images as $rs)
                                    <tr>
                                        <td>{{ $rs->id }}</td>
                                        <td>
                                            @if ($rs->image)
                                                <img src="{{Storage::url($rs->image)}}" height="70" width="70" >
                                            @endif
                                        </td>
                                        <td>{{ $rs->title }}</td>
                                        <td><a href="{{ route('user_image_delete', ['id' => $rs->id, 'home_id' => $data->id]) }}" onclick="return confirm('Are you Sure?')">Delete</a></td>
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
</body>
</html>

