<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //

    public function show($name){

        $user = User::where('name', $name)->first();

        return view('user.index', compact('user'));

    }
}
