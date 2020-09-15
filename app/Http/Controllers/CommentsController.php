<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentsController extends Controller
{
    //

      /**
    * An acion for displaying all of the users coocoos
    *
    * @return view
    */
    public function save () {

        $coocoo = request()->validate([
            "coocoo"=>"required",
            "comment"=>"required",

        ] );



        Comment::create(
           ["coocoo"=>request()->input("coocoo"),
            "author"=> auth()->user()->id,
            "comment"=>request()->input("comment")]
        );


        return back();
    }

}
