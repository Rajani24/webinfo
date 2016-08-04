@extends('layouts.admin')

@section('content')



    <div class="row">
        <h2>Add User</h2>
        <form action="{{Route('updateUser',$user->id)}}" class="form" method="post">
            {{csrf_field()}}
            <div class="form-group"><label for="">Role</label>
                <select name="role_id" id="" class="form-control">
                    @foreach($roles as$role)
                        <option value="{{$role->id}}">{{$role->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group"><label for="">Name</label><input type="text"  class="form-control" name="name" value="{{$user->name}}"></div>
            <div class="form-group"><label for="">Address</label><input type="text" class="form-control" name="address" value="{{$user->address}}" ></div>
            <div class="form-group"><label for="">Email</label><input type="text"  class="form-control" name="email" value="{{$user->email}}" ></div>
            <div class="form-group"><label for="">Phone</label><input type="text"  class="form-control" name="phone" value="{{$user->phone}}"></div>

            <div class="form-group"><label for=""></label><button class="byn-btn-sucess">Save</button></div>
        </form>
    </div>
@stop