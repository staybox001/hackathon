<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    //
    public function produtos()
    {
        return $this->hasMany('App\produtos');
    }
}
