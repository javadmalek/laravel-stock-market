<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';

    public function user()
    {
        return $this->belongsTo('App\User', '_user_id');
    }

    public function stocks()
    {
        return $this->hasMany('App\Stock', '_company_id')
            ->orderBy('updated_at', 'desc');
    }
}
