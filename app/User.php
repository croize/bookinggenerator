<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

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

     public function level($level){
       if ($this->level == $level) {
         return true;
       }else{
         return false;
       }
     }

     public function book()
     {
       return $this->hasMany('App\Booking');
     }

    protected $hidden = [
        'password', 'remember_token',
    ];
}
