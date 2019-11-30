<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Motorista extends Model
{
    //
    public function geolocations()
    {
        return $this->hasMany('App\Geolocations');
    }
    public function entrega()
    {
        return $this->hasMany('App\Entrega');
    }
}
