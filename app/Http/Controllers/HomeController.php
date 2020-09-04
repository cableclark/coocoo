<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Coocoo;

class HomeController extends Controller
{

    private $coocoos;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }



    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Coocoo $coocoo)
    {

        $this->coocoos = $coocoo->getCoocoosOfOwnFollowers();


        if(!$this->coocoos->isEmpty()) {

            $coocoosCollection = $this->prepareFollowersCollections();

        } else {

            $coocoosCollection = [];
        }

        return view('home', compact('coocoosCollection'));

    }

     /**
     * Prepare the retreived array of collcetions
     *
     * @return Collection
     */

    private function prepareFollowersCollections () {

        $firstUserItems = $this->coocoos[0];

        forEach($this->coocoos as $coocoo) {
            $firstUserItems = $firstUserItems->merge($coocoo);
        }

       return $firstUserItems->sortBy('createdAt');
    }
}
