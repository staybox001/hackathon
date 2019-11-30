<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Entrega;

class EntregaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
=======
        $entrega = Entrega::all();
>>>>>>> lenon
        return view('entrega.index', compact('entrega'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('entrega.cadastro');
    }

    public function andamento()
    {
<<<<<<< HEAD
        $andamento = Entrega::where('status', 0)->all();
        return view('entrega.andamento', compact('andamento'));
=======
        $andamento = Entrega::where('status',0)->all();
        return view('entrega.andamento');
>>>>>>> lenon
    }

    public function efetuada()
    {
<<<<<<< HEAD
        $efetuada=Entrega::where('status', 1)->all();
        return view('entrega.efetuada', compact('efetuada'));
=======
        $efetuada = Entrega::where('status',1)->all();
        return view('entrega.efetuada');
>>>>>>> lenon
    }
    
    public function divergencia()
    {
<<<<<<< HEAD
        $divergencia=Entrega::where('status', 2)->all();
        return view('entrega.divergencia', compact('divergencia'));
=======
        $divergencia = Entrega::where('status',2)->all();
        return view('entrega.divergencia');
>>>>>>> lenon
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
        Entrega::insert(['id_produto' => $request->produto, 'id_cliente' => $request->cliente, 'id_motorista' => $request->motorista]);
        return redirect()->route('/entrega/andamento');
=======
        Entrega::insert(['id_produto' => $request->produto, 'id_cliente' => $request->cliente, 'id_motorista' => $request->motorista, 'status' => $request->status]);
        return redirect()->route('/andamento');
>>>>>>> lenon
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
