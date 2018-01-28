<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User', '_user_id');
    }

    public function company()
    {
        return $this->belongsTo('App\Company', '_company_id');
    }

    public function market()
    {
        return $this->belongsTo('App\Market', '_market_id');
    }
}
