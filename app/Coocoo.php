<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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



    public function getLatestCoocoos ($id) {


            $follows = auth()->user()->follows;

            dd($follows);

            $ids = $follows->map(function ($item) {

                return $item->id;

            });

            $ids[]= auth()->user()->id;

            return Coocoo::whereIn('user_id', $ids)->orderBy('created_at', 'desc')
                    ->paginate(5);


    }


}
