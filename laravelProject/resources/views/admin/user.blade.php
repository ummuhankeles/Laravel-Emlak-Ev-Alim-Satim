@extends('Layouts.admin')

@section('title', 'User List')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-dark">
                                    <thead>
                                    <tr>
                                        <th> Id </th>
                                        <th></th>
                                        <th> Name </th>
                                        <th> Email </th>
                                        <th> Address </th>
                                        <th> Roles </th>
                                        <th> Edit </th>
                                        <th> Delete </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($datalist as $rs)
                                    <tr>
                                        <td>{{ $rs->id }}</td>
                                        <td>
                                            @if ($rs->profile_photo_path)
                                                <img src="{{Storage::url($rs->profile_photo_path)}}" style="border-radius: 10px" height="70" width="70" >
                                            @endif
                                        </td>
                                        <td>{{ $rs->name }}</td>
                                        <td>{{ $rs->email }}</td>
                                        <td>{{ $rs->address }}</td>
                                        <td>
                                            @foreach($rs->roles as $row)
                                                {{ $row->name }}
                                            @endforeach
                                            <a href="{{ route('admin_user_roles', ['id'=>$rs->id]) }}" onclick="return !window.open(this.href, '', 'top=50 left=100 width=800, height=600')">
                                                <i class="mdi mdi-plus-circle"></i>
                                            </a>
                                        </td>
                                        <td><a href="{{ route('admin_user_edit', ['id' => $rs->id]) }}">Edit</a></td>
                                        <td><a href="{{ route('admin_user_delete', ['id' => $rs->id]) }}" onclick="return confirm('Are you Sure?')">Delete</a></td>
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
