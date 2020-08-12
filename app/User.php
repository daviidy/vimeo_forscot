<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    const ADMIN_TYPE = 'admin';
    const DEFAULT_TYPE = 'default';

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


    public function isAdmin()    {
        return $this->type === self::ADMIN_TYPE;
    }


    /**
     * [users description]
     * relationship one to many with Video model
     * @return [array] [description]
     */
     public function videos()
     {
         return $this->hasMany('App\Video');
     }

     /**
      * [users description]
      * relationship one to many with Comment model
      * @return [array] [description]
      */
      public function comments()
      {
          return $this->hasMany('App\Comment');
      }




}
