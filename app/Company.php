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
    public function stocksByNaN()
    {
        return $this->hasMany('App\Stock', '_company_id')
            ->where('type','=','NaN')
            ->orderBy('price', 'desc');
    }
    public function stocksByCommon()
    {
        return $this->hasMany('App\Stock', '_company_id')
            ->where('type','=','COMMON')
            ->orderBy('price', 'desc');
    }
    public function stocksByPreferred()
    {
        return $this->hasMany('App\Stock', '_company_id')
            ->where('type','=','PREFERRED')
            ->orderBy('price', 'desc');
    }

}
