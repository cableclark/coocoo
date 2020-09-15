<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LikesController extends Controller
{
    //

    public function save() {

        $validdata= request()->validate([
            "coocoo_id"=>"required",
        ] );

        if (auth()->user()->isLikedBy($validdata)) {

            throw new \Exception ("A user is not able to like a coocoo twice");

            return redirect()->route('UserHome');

        }

        auth()->user()->likes()->attach($validdata);

        return redirect()->route('UserHome');

    }

    public function delete () {

        $validdata= request()->validate([
            "coocoo_id"=>"required",
        ] );

        auth()->user()->likes()->detach($validdata);

        return redirect()->route('UserHome');
    }



}
