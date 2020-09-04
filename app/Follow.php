<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Follow extends Model
{
    //
    protected $guarded = [];

    public function user()
    {

        return $this->belongsTo('App\User');

    }
    /**
     * Establishes the relationship with the App\
     *
     * @return App\User
     */
    public function users()
    {

        return $this->hasMany('App\User');

    }

    /**
     * Return a list of the followed
     *
     * @return Collection
     *
     */



}
