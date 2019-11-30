<?php

namespace App\Http\Controllers\Api;

use App\Entrega;
use App\Geolocation;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    public function login(Request $request)
    {
        if ($user = DB::table('motoristas')->where('cpf', $request->cpf)->first()) {
            if ($user->senha == $request->senha_motorista) {
                return json_encode($user); // logado com sucesso
            } else {
                return "senha inválida";
            }
        } else {
            return "Cpf inválido";
        }
    }
    // recebe id do motorista
    public function listaEntregas($id_motorista)
    {
        $entregas = DB::table('entregas')
            ->where('id_motorista', '=', "$id_motorista")
            ->join('clientes', 'entregas.id_cliente', '=', 'clientes.id')
            ->join('produtos', 'entregas.id_produto', '=', 'produtos.id')
            ->select('entregas.*', 'clientes.nome', 'clientes.endereco', 'clientes.cidade', 'clientes.estado', 'produtos.nome AS prodNome')
            ->get();
        return json_encode($entregas);
    }

    public function postGeolocation(Request $request)
    {
        return Geolocation::create([
            "latitude" => $request->latitude,
            "longitude" => $request->longitude,
            "id_motorista" => $request->id_motorista
        ]);
    }
}
