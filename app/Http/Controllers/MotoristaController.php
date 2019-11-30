<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Motorista;
use App\Geolocation;
use DB;

class MotoristaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $motoristas = Motorista::all();
        return view('motorista.index', compact('motoristas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('motorista.cadastro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // UPLOAD IMAGEM MOTORISTA
        // VERIFICA SE É VALIDO
        //CRIA O NOME DO ARQUIVO
        if ($request->hasFile('img_motorista') && $request->file('img_motorista')->isValid()) {
            $nome = $request->nome . time();
            $extensao = $request->img_motorista->extension();
            $nomeFile = "{$nome}.{$extensao}";
            $upload = $request->img_motorista->storeAs('img-motoristas', $nomeFile);
            $dadosFormulario['img_motorista'] = $upload;
            if (!$upload) {
                return redirect()
                    ->back()
                    ->with('error', 'Falha ao enviar imagem');
            }
        }
      
           Motorista::insert(['nome' => $request->nome, 'cpf' => $request->cpf, 'data_nascimento' => $request->data, 'senha' => $request->senha, 'foto' => $upload]);
           return redirect()->route('motorista.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $motorista = Motorista::find($id);
        $coord = Geolocation::where('id_motorista', $id)
                                ->orderBy('id', 'desc')
                                ->first();
        //dd($coord);
        return view('motorista.motoristashow', compact('motorista', 'coord'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $motorista = Motorista::find($id);
        return view('motorista.editar', compact('motorista'));
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
        $olddata = Motorista::find($id);
        $senha = $olddata->senha;
        $foto = $olddata->foto;
        if ($request->hasFile('img_motorista') && $request->file('img_motorista')->isValid()) {
            $nome = $request->nome . time();
            $extensao = $request->img_motorista->extension();
            $nomeFile = "{$nome}.{$extensao}";
            $upload = $request->img_motorista->storeAs('img-motoristas', $nomeFile);
            $dadosFormulario['img_motorista'] = $upload;
            if (!$upload) {
                return redirect()
                    ->back()
                    ->with('error', 'Falha ao enviar imagem');
            }
            $foto = $upload;
        }
        if (!empty($request->senha)){
            $senha = $request->senha;
        }
        Motorista::where('id', $id)
                            ->update(['nome' => $request->nome, 'cpf' => $request->cpf, 'senha' => $senha, 'foto' => $foto]);
        return redirect()->route('motorista.show', $id);

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
