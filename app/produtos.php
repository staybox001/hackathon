<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produtos extends Model
{
    //
    public function categoria()
    {
        return $this->belongsTo('App\categoria');
    }
    public function entrega()
    {
        return $this->hasMany('App\entrega');
    }
}
