<?php

namespace App\Http\Controllers\CRUDSistController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Exception;


class CSistController extends Controller
{
    
    public function createresponse(Request $request)
    {
        
        try{
    	    $sist = DB::insert('INSERT INTO sist_planetario VALUES(DEFAULT,?,?,?,?,?)',
                                [$request->nome_sist,
                                $request->qtd_planetas,
                                $request->qtd_estrelas,
    							$request->idade_sist,
    							$request->galaxia]);
            $msg = "Sistema Planetário de nome $request->nome_sist foi inserido com sucesso.";
            $rt = "/sist";
            return view('result',compact('msg','rt'));
        }catch(Exception $e){
            $msg = "Erro ao tentar inserir o Sistema Planetário.";
            $rt = "/sist/create";
            return view('result',compact('msg','rt'));
        }
    }

    public function create()
    {
        return view('crudsist/create');
    }
    
}
