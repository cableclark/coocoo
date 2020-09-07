<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Follow;
use App\User;

class FollowsController extends Controller
{
    //


    public function destroy($userid) {

        $follow = Follow::where('follwed_user_id', $userid)
                        ->where('user_id', auth()->user()->id)
                        ->get();

        $follow[0]->delete();

        request()->session()->flash('status',  'Your no longer follow ' .  $userid .'!');

        return redirect()->route('CoocoosHome');
    }

    public function save() {

        $followed = request()->validate (["follwed_user_id"=>"required"]);

        $followed ['user_id'] = auth()->user()->id;

       //Check if you alrady follow the user adn if they do redirect;

        if ($this->isAlreadyFollowed()) {

            return redirect()->route('CoocoosHome');

        }

        Follow::create($followed);

        request()->session()->flash('status',  'Your are now following ' .  User::findOrFail(request("follwed_user_id"))["name"] .'!');

        return redirect()->route('CoocoosHome');
    }


    private function isAlreadyFollowed() {

        $isFollowed = $this->retreiveFollowed();

        if(!$isFollowed->isEmpty()) {

            request()->session()->flash('status',  'Your are already following this user!');

            return true;

        };


    }

    private function retreiveFollowed () {

        return Follow::where('follwed_user_id', request()->input('follwed_user_id'))
        ->where('user_id', auth()
        ->user()->id)
        ->get();

    }
}
