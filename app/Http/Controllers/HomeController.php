<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $clientes = DB::table('clientes')->count();
        $totentregas = DB::table('entregas')->count();
        $andamento = DB::table('entregas')->where('status', 0)->count();
        $totdiverg = DB::table('entregas')->where('status', 2)->count();

        return view('painel.index', compact('clientes', 'andamento', 'totentregas', 'totdiverg'));
    }
}
