<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function andamento()
    {
        $teste = "asda";
        dd($teste);
        return view('entrega.andamento');
    }
}
