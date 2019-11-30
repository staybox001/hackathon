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
        $entrega = Entrega::all();
=======
>>>>>>> gabriel4
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
        $andamento = Entrega::where('status',0)->all();
        return view('entrega.andamento');
=======
        $andamento=Entrega::where('status', 0)->all();
        return view('entrega.andamento', compact('andamento'));
>>>>>>> gabriel4
    }

    public function efetuada()
    {
        $efetuada=Entrega::where('status', 1)->all();
        return view('entrega.efetuada', compact('efetuada'));
<<<<<<< HEAD
        $efetuada = Entrega::where('status',1)->all();
        return view('entrega.efetuada');
=======
>>>>>>> gabriel4
    }
    
    public function divergencia()
    {
        $divergencia=Entrega::where('status', 2)->all();
        return view('entrega.divergencia', compact('divergencia'));
<<<<<<< HEAD
        $divergencia = Entrega::where('status',2)->all();
        return view('entrega.divergencia');
=======
>>>>>>> gabriel4
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Entrega::insert(['id_produto' => $request->produto, 'id_cliente' => $request->cliente, 'id_motorista' => $request->motorista]);
        return redirect()->route('/entrega/andamento');
<<<<<<< HEAD
        Entrega::insert(['id_produto' => $request->produto, 'id_cliente' => $request->cliente, 'id_motorista' => $request->motorista, 'status' => $request->status]);
        return redirect()->route('/andamento');
=======
>>>>>>> gabriel4
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
