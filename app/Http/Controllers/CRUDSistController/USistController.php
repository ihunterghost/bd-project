<?php

namespace App\Http\Controllers\CRUDSistController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Exception;

class USistController extends Controller
{
    
    public function updateresponse(Request $request)
    {   
      try{
        $sist =  DB::update('UPDATE sist_planetario
    			    SET nome_sist = ?,
    					  idade_sist = ? 
    			    WHERE id_sist = ?',
    					  [$request->nome_sist,
                $request->idade_sist,
                $request->id_sist]);

        if($sist == 1){
          $msg = "Sistema Planetário de id: $request->id_sist foi modificado com sucesso.";
          $rt = "/sist";
          return view('result',compact('msg','rt'));
        }else{
          $msg = "Erro ao tentar modificar o Sistema Planetário.";
          $rt = "/sist/update";
          return view('result',compact('msg','rt'));
        }
              
      }catch(Exception $e){
        $msg = "Erro ao tentar modificar o Sistema Planetário.";
        $rt = "/sist/update";
        return view('result',compact('msg','rt'));
      }
    }
    
    public function update()
    {
        return view('crudsist/update');
    }
}
