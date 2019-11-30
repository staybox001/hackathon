<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entrega extends Model
{
    //
    public function produtos()
    {
        return $this->belongsTo('App\Produtos');
    }

    public function clientes()
    {
        return $this->belongsTo('App\Clientes');
    }

    public function motoristas()
    {
        return $this->belongsTo('App\Motoristas');
    }
}
