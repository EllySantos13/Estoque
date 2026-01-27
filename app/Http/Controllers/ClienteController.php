<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
      public function index()
    {
        $cliente = Cliente::all();
        return response()->json($cliente);
    }

    public function store(Request $request)
    {
        $verificar = Cliente::where('cpf','=',$request->cpf)->first();
        if($verificar == null){
        $cliente = Cliente::create([
            'id'=> $request->id,
            'nome'=> $request-> nome,
            'cpf'=> $request-> cpf,
            'idade'=> $request-> idade,
        ]);
        Return response()->json($cliente);
    } else {
        return response()->json(['este cpf já foi utilizado']);
    }
    }
}
