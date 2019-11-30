<?php

namespace App\Http\Controllers\Api;

use App\Entrega;
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
    public function listaEntregas($id_motorista){
        $entregas = DB::table('entregas')->where('id_motorista', '=', "$id_motorista")->get();
        return json_encode($entregas);
    }
}
