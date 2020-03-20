<?php

namespace App\Http\Controllers\CRUDPlanetaController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Exception;


class CPlanetaController extends Controller
{
    
    public function createresponse(Request $request)
    {
        try{
    	    $planeta = DB::insert('INSERT INTO planeta VALUES(DEFAULT,?,?,?,?,?,?)',
    							[$request->nome_planeta,
    							$request->tam_planeta,
    							$request->peso_planeta,
    							$request->vel_rotacao,
    							$request->comp_planeta,
    							'false']);
            $msg = "Planeta de nome $request->nome_planeta foi inserido com sucesso.";
            $rt = "/planeta";
            return view('result',compact('msg','rt'));
        }catch(Exception $e){
            $msg = "Erro ao tentar inserir o Planeta.";
            $rt = "/planeta/create";
            return view('result',compact('msg','rt'));
        }
    }

    public function create()
    {
        return view('crudplaneta/create');
    }
    
}
