<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class geolocation extends Model
{
    //
    public function motoristas()
    {
        return $this->belongsTo('App\motoristas');
    }
}
