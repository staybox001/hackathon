<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produtos;
use App\Categoria;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = Produtos::all();
        return view('produto.index', compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('produto.cadastro', compact('categorias')); 
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
        if ($request->hasFile('img_produto') && $request->file('img_produto')->isValid()) {
            $nome = $request->nome . time();
            $extensao = $request->img_produto->extension();
            $nomeFile = "{$nome}.{$extensao}";
            $upload = $request->img_produto->storeAs('img-produto', $nomeFile);
            $dadosFormulario['img_produto'] = $upload;
            if (!$upload) {
                return redirect()
                    ->back()
                    ->with('error', 'Falha ao enviar imagem');
            }
            Produtos::insert(['nome' => $request->nome, 'id_categoria' => $request->categoria, 'valor' => $request->valor, 'peso' => $request->peso, 'imagem' => $upload]);
            
        }
        return redirect()->route('produto.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produto = Produtos::find($id);
        $categoria = Categoria::find($produto->id_categoria);
        return view('produto.produtoshow', compact('produto', 'categoria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $selected = '';
        $produto = Produtos::find($id);
        $categorias = Categoria::all();
        return view('produto.edit', compact('produto', 'categorias', 'selected'));
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
       
        $olddata = Produtos::find($id);
        $foto = $olddata->imagem;
        if ($request->hasFile('img_produto') && $request->file('img_produto')->isValid()) {
            $nome = $request->nome . time();
            $extensao = $request->img_produto->extension();
            $nomeFile = "{$nome}.{$extensao}";
            $upload = $request->img_produto->storeAs('img-produto', $nomeFile);
            $dadosFormulario['img_produto'] = $upload;
            if (!$upload) {
                return redirect()
                    ->back()
                    ->with('error', 'Falha ao enviar imagem');
            }
            $foto = $upload;
        }

        Produtos::where('id', $id)
                            ->update(['nome' => $request->nome, 'id_categoria' => $request->categoria, 'valor' => $request->valor, 'peso' => $request->peso, 'imagem' => $foto]);
        return redirect()->route('produto.show', $id);



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
