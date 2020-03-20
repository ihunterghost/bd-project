<?php

namespace App\Http\Controllers\CRUDSnController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Exception;

class CSnController extends Controller
{
    
    public function createresponse(Request $request)
    {
        try{
            $sn = DB::insert('INSERT INTO satelite_natural VALUES(DEFAULT,?,?,?,?)',
    							[$request->nome_sn,
    							$request->tam_sn,
    							$request->peso_sn,
                                $request->comp_sn]);
                                
            $msg = "Satélite Natural de nome $request->nome_sn foi inserido com sucesso.";
            $rt = "/sn";
            return view('result',compact('msg','rt'));
        }catch(Exception $e){
            $msg = "Erro ao tentar inserir a Satélite Natural.";
            $rt = "/sn/create";
            return view('result',compact('msg','rt'));
        }
      
    }

    public function create()
    {
        return view('crudsn/create');
    }
    
}
