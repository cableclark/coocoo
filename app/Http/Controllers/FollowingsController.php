<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class FollowingsController extends Controller
{
    //

    public function save() {

        $validdata = request()->validate([
            "followed_id"=>"required",
        ] );

        $this->saveFollowing($validdata);

        return redirect()->route('UserHome');
    }


    public function destroy($userid) {

        $follow = DB::table("follower_user")->where('user_id',   $userid)->where('follower_id', auth()->user()->id)
                        ->delete();

        request()->session()->flash('status',  'You no longer follow ' .  request()->input('username') .'!');

        return redirect()->route('UserHome');
    }


    public function saveFollowing ($userid) {

        if (auth()->user()->followsAUser($userid)) {

            request()->session()->flash('status',  'Your already follow ' . request()->input('username') .'!');

            throw new \Exception(" Authenticated user cannot follow another user twice");

        }

        auth()->user()->followings()->attach($userid);

        request()->session()->flash('status',  'Your are now following ' . request()->input('username') .'!');

    }
}
