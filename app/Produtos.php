<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    //
    public function categoria()
    {
        return $this->belongsTo('App\Categoria');
    }
    public function entrega()
    {
        return $this->hasMany('App\Entrega');
    }
}
