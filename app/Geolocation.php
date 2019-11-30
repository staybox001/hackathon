<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Geolocation extends Model
{
    //
<<<<<<< HEAD
    protected $fillable = [
        'latitude',	'longitude', 'id_motorista'

];
    public function motoristas()
=======
    public function motorista()
>>>>>>> gabriel4
    {
        return $this->belongsTo('App\Motorista');
    }
}
