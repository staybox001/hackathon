<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class entrega extends Model
{
    //
    public function produtos()
    {
        return $this->belongsTo('App\produtos');
    }

    public function clientes()
    {
        return $this->belongsTo('App\clientes');
    }

    public function motoristas()
    {
        return $this->belongsTo('App\motoristas');
    }
}
