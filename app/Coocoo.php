<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coocoo extends Model
{
    //
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function likes()
    {
        return $this->hasMany('App\Like');
    }

   /**
     * Retreive the coocoos of the folowers of an autheticated user
     *
     * @return Array
     */
    public function getCoocoosOfOwnFollowers() {

        return auth()->user()->follows->map(function ($item) {

            return User::findOrFail($item->follwed_user_id)->coocoos;

        });
    }


}
