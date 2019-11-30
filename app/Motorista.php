<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Motorista extends Model
{
    //
    public function geolocation()
    {
        return $this->hasMany('App\Geolocation');
    }
    public function entrega()
    {
        return $this->hasMany('App\Entrega');
    }
}
