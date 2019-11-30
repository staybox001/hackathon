<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Entrega;
use App\Cliente;
use App\Motorista;
use App\Produtos;

class EntregaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return redirect()->route('entregaandamento');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create()
    {
        $clientes = Cliente::all();
        $motoristas = Motorista::all();
        $produtos = Produtos::all();
        return view('entrega.cadastro', compact('clientes', 'motoristas', 'produtos'));
    }

    public function andamento()
    {

        $andamento = Entrega::where('status', 0)
                                    ->join('produtos', 'entregas.id_produto', '=', 'produtos.id')
                                    ->join('motoristas', 'entregas.id_motorista', '=', 'motoristas.id')
                                    ->join('clientes', 'entregas.id_cliente', '=', 'clientes.id')   
                                    ->select('entregas.id as id', 'produtos.nome as produto', 'motoristas.nome as motorista', 'clientes.nome as cliente')
                                    ->get();
        // /dd($andamento);
        return view('entrega.andamento', compact('andamento'));

    }

    public function efetuada()
    {
        $efetuadas = Entrega::where('status', 1)
        ->join('produtos', 'entregas.id_produto', '=', 'produtos.id')
        ->join('motoristas', 'entregas.id_motorista', '=', 'motoristas.id')
        ->join('clientes', 'entregas.id_cliente', '=', 'clientes.id')   
        ->select('entregas.id as id', 'produtos.nome as produto', 'motoristas.nome as motorista', 'clientes.nome as cliente')
        ->get();
        // /dd($andamento);
        return view('entrega.efetuada', compact('efetuadas'));

    }
    
    public function divergencia()
    {
        $divergencias = Entrega::where('status', 2)
        ->join('produtos', 'entregas.id_produto', '=', 'produtos.id')
        ->join('motoristas', 'entregas.id_motorista', '=', 'motoristas.id')
        ->join('clientes', 'entregas.id_cliente', '=', 'clientes.id')   
        ->select('entregas.id as id', 'produtos.nome as produto', 'motoristas.nome as motorista', 'clientes.nome as cliente')
        ->get();
        // /dd($andamento);
        return view('entrega.divergencia', compact('divergencias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        Entrega::insert(['id_produto' => $request->produto, 'status' => '0','id_cliente' => $request->cliente, 'id_motorista' => $request->motorista]);
        return redirect()->route('entregaandamento');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $entrega = Entrega::where('entregas.id', $id)
        ->join('produtos', 'entregas.id_produto', '=', 'produtos.id')
        ->join('motoristas', 'entregas.id_motorista', '=', 'motoristas.id')
        ->join('clientes', 'entregas.id_cliente', '=', 'clientes.id')   
        ->select('entregas.id_produto', 'entregas.id_cliente', 'entregas.id_motorista', 'produtos.nome as produto', 'motoristas.nome as motorista', 'entregas.status', 'entregas.latitude', 'entregas.longitude','clientes.nome as cliente_nome')
        ->first();
       // dd($entrega);
        // /dd($andamento);
        return view('entrega.entregashow', compact('entrega', 'id'));
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
