<?php

namespace App\Http\Controllers\CRUDEstrelaSistController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Exception;


class CEstrelaSistController extends Controller
{
    
    public function createresponse(Request $request)
    {
        try{
            $estrelasist = DB::insert('INSERT INTO estrela_sist VALUES(DEFAULT,?,?)',
                                    [$request->estrela,
                                    $request->sist_planetario]);
            $msg = "Estrela de id: $request->estrela inserido ao Sistema Planetário de id: $request->sist_planetario";
            $rt = "/estrelasist/create";

            $sist= DB::select('SELECT qtd_estrelas 
                                   FROM sist_planetario 
                                   WHERE id_sist = ?',[$request->sist_planetario]);
            $sist[0]->qtd_estrelas = $sist[0]->qtd_estrelas + 1;
            $qnt = $sist[0]->qtd_estrelas;

            $sistupdate =  DB::update('UPDATE sist_planetario
    			    SET qtd_estrelas = ?
    			    WHERE id_sist = ?',
    					  [$qnt,
                          $request->sist_planetario]);

            return view('result',compact('msg','rt'));
        }catch(Exception $e){
            $msg = "Erro ao tentar inserir a Estrela no Sistema Planetário.";
            $rt = "/estrelasist/create";
            return view('result',compact('msg','rt'));
        }

      
    }

  
    public function create()
    {
        return view('crudestrelasist/create');
    }
    
}
