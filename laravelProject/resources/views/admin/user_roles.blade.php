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
            <h3 class="card-title">User Roles</h3>
            @include('home.message')
        </div>
        <div class="card-body">
                <div class="form-group row">
                    <table class="table table-dark">
                        <tr>
                            <th> Id </th><td>{{ $data->id }}</td>
                        </tr>

                        <tr>
                            <th> Name </th><td>{{ $data->name }}</td>
                        </tr>

                        <tr>
                            <th> Email </th><td>{{ $data->email }}</td>
                        </tr>

                        <tr>
                            <th>Role</th>
                            <td>
                                <table>
                                    @foreach($data->roles as $row)
                                        <td>{{ $row->name }}</td>
                                        <td>
                                            <a href="{{ route('admin_user_role_delete', ['userid'=>$data->id, 'roleid'=>$row->id]) }}" onclick="return confirm('Are you Sure?')" >Delete</a>
                                        </td>
                                    @endforeach
                                </table>
                            </td>
                        </tr>

                        <tr>
                            <th>Add Role</th>
                            <td>
                                <form role="form" action="{{ route('admin_user_role_add', ['id'=>$data->id]) }}">
                                    @csrf
                                    <select name="roleid">
                                        @foreach($datalist as $rs)
                                            <option value="{{ $rs->id }}">{{ $rs->name }}</option>
                                        @endforeach
                                    </select>
                                    <button type="submit" class="btn btn-primary">Add Role</button>
                                </form>
                            </td>
                        </tr>

                        <tr>
                            <button type="submit" class="btn btn-primary mb-2">Update</button>
                        </tr>
                    </table>
                </div>
        </div>
    </div>
</div>


