<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class motorista extends Model
{
    //
    public function geolocations()
    {
        return $this->hasMany('App\geolocations');
    }
    public function entrega()
    {
        return $this->hasMany('App\entrega');
    }
}
