<?php

namespace App\Http\Controllers;

use App\Models\Entrada;
use Illuminate\Http\Request;

class EntradaController extends Controller
{
    public function index()
    {
        $entrada = Entrada::all();
        return response()->json($entrada);
    }

    public function store(Request $request){
          $entrada = Entrada::create([
            'quantidade'=> $request->quantidade
          ]);
          Return response()->json($entrada);
    }

    public function delete($id){
        $entrada = Entrada::find($id);
        if(!$entrada){
            return response()->json(['produto não encontrada']);
        }

        $entrada->delete();
        return response()->json(['produto deletado com sucesso']);
    }
}
