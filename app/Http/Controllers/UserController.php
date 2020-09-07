<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //

    public function show($name){

        $user = User::where('name', $name)->get();

        return view('user.home', compact('user'));

    }
}
