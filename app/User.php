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
    protected $hidden = [
        'password', 'remember_token', 'type'
    ];

    public function tickets()
    {
        return $this->hasMany('App\Ticket');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function isAdmin()
    {
        return $this->type=="admin";
    }

    public function downtimeforms()
    {
        return $this->hasMany('App\downtimeform');
    }

    public function generaltestreport()
    {
        return $this->hasMany('App\generaltestreport');
    }
}
