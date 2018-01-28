<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Market extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User', '_user_id');
    }

    public function stocks()
    {
        return $this->hasMany('App\Stock', '_market_id')
            ->orderBy('updated_at', 'desc');
    }
    public function stocksHighest()
    {
        return $this->stocks()->orderBy('price', 'desc')->first();
    }
}
