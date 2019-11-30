<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Geolocation extends Model
{
    //
    public function motoristas()
    {
        return $this->belongsTo('App\Motoristas');
    }
}
