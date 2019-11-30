<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Geolocation extends Model
{
    //
    protected $fillable = [
        "latitude" ,
        "longitude" ,
        "id_motorista" ,
    ];
    public function motorista()
    {
        return $this->belongsTo('App\Motorista');
    }
}
