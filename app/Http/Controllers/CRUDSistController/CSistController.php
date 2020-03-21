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
    							$request->idade_sist,
    							$request->galaxia]);
            $msg = "Sistema Planetário de nome $request->nome_sist foi inserido com sucesso.";
            $rt = "/sist";

            $glx = DB::select('SELECT qtd_sistemas 
                                   FROM galaxia 
                                   WHERE id_galaxia = ?',[$request->galaxia]);
            $glx[0]->qtd_sistemas = $glx[0]->qtd_sistemas + 1;
            $qnt = $glx[0]->qtd_sistemas;
            echo $qnt;
            $galaxiaupdate =  DB::update('UPDATE galaxia
    			    SET qtd_sistemas = ?
    			    WHERE id_galaxia = ?',
    					  [$qnt,
                          $request->galaxia]);
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
