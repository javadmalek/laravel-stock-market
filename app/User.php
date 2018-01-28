<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function companies()
    {
        return $this->hasMany('App\Company', '_user_id')
            ->orderBy('id', 'desc');
    }

    public function markets()
    {
        return $this->hasMany('App\Market', '_user_id')
            ->orderBy('id', 'desc');
    }

    public function stocks()
    {
        return $this->hasMany('App\Stock', '_user_id')
            ->orderBy('updated_at', 'desc');
    }
}
