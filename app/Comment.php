<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Coocoo;
use App\User;

class Comment extends Model
{
    //
    protected $guarded = [];

    public function user()

    {

        return $this->belongsTo('App\User', 'author');

    }


    public function coocoo()

    {

        return $this->belongsTo('App\Coocoo', 'coocoo');

    }
}
