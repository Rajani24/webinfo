@extends('layouts.admin')
@section('content')
    <div class="row">
        <h2>User List</h2>
        <table class="table">
            <tr>
                <th>SN</th>
                <th>Name</th>
                <th>Address</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
            @foreach($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->address}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->phone}}</td>
                <td>{{$user->role->name}}</td>
                <td>{{$user->name}}</td>
            </tr>
            @endforeach
        </table>
    </div>
@stop