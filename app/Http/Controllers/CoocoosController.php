<?php

namespace App\Http\Controllers;

use App\Coocoo;

use Illuminate\Http\Request;

class CoocoosController extends Controller
{

    /**
    * An acion for displaying all of the users coocoos
    *
    * @return view
    */
    public function index () {

        $coocoos = auth()->user()->coocoos;


        return view ('coocoo.index', compact('coocoos'));
    }

    /**
    * An acion for displaying a view for creating a coocoo
    *
    * @return view
    */

    public function create () {

        return view ('coocoo.create');
    }

    /**
    * An acion for creating a coocoo
    *
    * @return view
    */

    public function save () {

        $Coocoodata= request()->validate ([

            "coocoo"=>"required",

        ]);

        $Coocoodata['user_id'] = auth()->user()->id;

        Coocoo::create($Coocoodata);

        request()->session()->flash('status',  'Your Coocoo has been saved!');

        return redirect()->route('SaveCoocoos');
    }

    /**
    * An acion for deleting a coocoo
    *
    * @return view
    */

    public function destroy ($id) {

        $coocoo = Coocoo::find($id);

        $coocoo->delete();

        request()->session()->flash('status',  'Your Coocoo has been deleted!');

        return  redirect()->route('coocoos');
    }
 }