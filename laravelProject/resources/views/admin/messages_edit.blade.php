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
                <h3 class="card-title">Update Message</h3>
                @include('home.message')
            </div>
            <div class="card-body">
                <form class="forms-sample" action="{{ route('admin_message_update', ['id' => $data->id]) }}" method="post">
                    @csrf
                    <div class="form-group row">
                        <table class="table table-dark">
                            <tr>
                            </tr>
                                <th> Id </th><td>{{ $data->id }}</td>
                            <tr>
                            </tr>
                                <th> Name </th><td>{{ $data->name }}</td>
                            <tr>
                            </tr>
                                <th> Subject </th><td>{{ $data->subject }}</td>
                            <tr>
                            </tr>
                                <th> Email </th><td>{{ $data->email }}</td>
                            <tr>
                            </tr>
                                <th> Message </th><td>{{ $data->message }}</td>
                            <tr>
                            </tr>
                                <th> Admin Note </th>
                            <td>
                                <textarea name="note" >{{$data->note}}</textarea>
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


