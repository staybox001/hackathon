<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //
    public function entregas()
    {
        return $this->hasMany('App\entregas');
    }
}
