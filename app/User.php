<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Coocoo;
use App\Follow;

class User extends Authenticatable
{
    use Notifiable;
    /**
     * Id of a user that needs to be checked if it is followed by the authenticated user.
     * @var Integer
     */
    private $idToBeChecked;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function coocoos()

    {

        return $this->hasMany('App\Coocoo');

    }

    public function followings()
    {

        return $this->belongsToMany(User::class, 'follower_user', 'follower_id', 'user_id');

    }


     public function followers()
    {

        return $this->belongsToMany(User::class, 'follower_user', 'user_id', 'follower_id');

    }


    public function followsAUser($userid) {

     return !empty(auth()->user()->followings()->where('user_id',$userid)->get()[0]);


    }




}
