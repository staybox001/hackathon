<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Geolocation extends Model
{
    //
    public function motorista()
    {
        return $this->belongsTo('App\Motorista');
    }
}
