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
        $followers = auth()->user()
            ->followings;

        $ids[] = $followers->map(function ($follower) {

            return $follower->id;

        });


        $latestCoocoos = Coocoo::whereIn('user_id', $ids[0])->orderBy('created_at', 'desc')->paginate(5);


        return view('home', compact('latestCoocoos'));

    }


}
