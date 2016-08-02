<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\User;


class UserController extends Controller
{
    function index(){

        $users =User::with('roles')->get();
        return view('users.list', ['users' => $users] );
    }

    function create(){

        $roles = Role::all();
        return view('users.create',['roles'=> $roles]);
    }

    function store(Request $request){

        dd($request->all() );
    }
}