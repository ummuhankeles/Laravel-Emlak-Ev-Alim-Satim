@extends('Layouts.admin')

@section('title', 'Contact Message List')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                @include('home.message')
            </div>
            <div class="card-body">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-dark">
                                    <thead>
                                    <tr>
                                        <th> Id </th>
                                        <th> Name </th>
                                        <th> Subject </th>
                                        <th> Email </th>
                                        <th> Message </th>
                                        <th> Admin Note </th>
                                        <th> Status </th>
                                        <th> Edit </th>
                                        <th> Delete </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($datalist as $rs)
                                    <tr>
                                        <td>{{ $rs->id }}</td>
                                        <td>{{ $rs->name }}</td>
                                        <td>{{ $rs->subject }}</td>
                                        <td>{{ $rs->email }}</td>
                                        <td>{{ $rs->message }}</td>
                                        <td>{{ $rs->note }}</td>
                                        <td>{{ $rs->status }}</td>
                                        <td><a href="{{ route('admin_message_edit', ['id' => $rs->id]) }}" onclick="return !window.open(this.href, '', 'top=50 left=100 width=1100 height=700')" >
                                                <img src="{{asset('assets/admin/icons')}}/edit.png" ></a>
                                        </td>
                                        <td><a href="{{ route('admin_message_delete', ['id' => $rs->id]) }}" onclick="return confirm('Are you Sure?')">Delete</a></td>
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
