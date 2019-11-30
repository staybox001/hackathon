<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Geolocation extends Model
{
    //
    protected $fillable = [
        'latitude',	'longitude', 'id_motorista'

];
    public function motoristas()
    {
        return $this->belongsTo('App\Motoristas');
    }
}
