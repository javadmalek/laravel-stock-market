<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Market extends Model
{

    public function user()
    {
        return $this->belongsTo('App\User', '_user_id');
    }
}
