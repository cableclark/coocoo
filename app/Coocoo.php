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


    public function comments()

    {

        return $this->hasMany('App\Comment', 'coocoo');

    }



    public function getLatestCoocoos ($id)

    {

            $follows = auth()->user()->follows;


            $ids = $follows->map(function ($item) {

                return $item->id;

            });

            $ids[]= auth()->user()->id;

            return Coocoo::whereIn('user_id', $ids)->orderBy('created_at', 'desc')
                    ->paginate(5);

    }

    public function likekdByUsers()
    {

        return $this->belongsToMany(Coocoo::class, 'likes', 'coocoo_id', 'user_id')->withTimestamps();

    }



}
