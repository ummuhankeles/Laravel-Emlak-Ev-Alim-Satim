<!-- favicon -->
<link rel="shortcut icon" type="image/png" href="{{asset('assets')}}/img/favicon.png">
<!-- google font -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
<!-- fontawesome -->
<link rel="stylesheet" href="{{asset('assets')}}/css/all.min.css">
<!-- bootstrap -->
<link rel="stylesheet" href="{{asset('assets')}}/bootstrap/css/bootstrap.min.css">
<!-- owl carousel -->
<link rel="stylesheet" href="{{asset('assets')}}/css/owl.carousel.css">
<!-- magnific popup -->
<link rel="stylesheet" href="{{asset('assets')}}/css/magnific-popup.css">
<!-- animate css -->
<link rel="stylesheet" href="{{asset('assets')}}/css/animate.css">
<!-- mean menu css -->
<link rel="stylesheet" href="{{asset('assets')}}/css/meanmenu.min.css">
<!-- main style -->
<link rel="stylesheet" href="{{asset('assets')}}/css/main.css">
<!-- responsive -->
<link rel="stylesheet" href="{{asset('assets')}}/css/responsive.css">

<div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Review Detail</h3>
                @include('home.message')
            </div>
            <div class="card-body">
                <form class="forms-sample" action="{{ route('admin_review_update', ['id' => $data->id]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <table class="table table-dark">
                            <tr>
                            </tr>
                                <th> Id </th><td>{{ $data->id }}</td>
                            <tr>
                            </tr>
                                <th> Name </th><td>{{ $data->user->name }}</td>
                            <tr>
                            </tr>
                                <th> Product </th><td>{{ $data->product->title }}</td>
                            <tr>
                            </tr>
                                <th> Subject </th><td>{{ $data->subject }}</td>
                            <tr>
                            </tr>
                                <th> Review </th><td>{{ $data->review }}</td>
                            <tr>
                            </tr>
                                <th> Rate </th><td>{{ $data->rate }}</td>
                            <tr>
                            </tr>
                                <th> IP </th><td>{{ $data->IP }}</td>
                            <tr>
                            </tr>
                                <th> Created Date </th><td>{{ $data->created_date }}</td>
                            <tr>
                            </tr>
                                <th> Updated Date </th><td>{{ $data->updated_date }}</td>
                            <tr>
                            </tr>
                            <th> Status </th>
                            <td>
                                <select name="status">
                                    <option selected>{{ $data->status }}</option>
                                    <option>True</option>
                                    <option>False</option>
                                </select>
                            </td>
                            <tr>
                                <button type="submit" class="btn btn-primary mb-2">Update Message</button>
                            </tr>
                        </table>
                    </div>
                </form>
            </div>
        </div>
 </div>


