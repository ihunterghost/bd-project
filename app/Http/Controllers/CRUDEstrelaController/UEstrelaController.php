<?php

namespace App\Http\Controllers\CRUDEstrelaController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Exception;

class UEstrelaController extends Controller
{
    
    public function updateresponse(Request $request)
    {   
      try{
        $estrela =  DB::update('UPDATE estrela
    			    SET nome_estrela = ?,
    					tam_estrela = ?,
    					idade_estrela = ?,
    					dist_terra_estrela = ?
    			    WHERE id_estrela = ?',
    					[$request->nome_estrela,
                        $request->tam_estrela,
                        $request->idade_estrela,
                        $request->dist_terra_estrela,
                        $request->id_estrela]);

        if($estrela == 1){
          $msg = "Estrela de id: $request->id_estrela foi modificada com sucesso.";
          $rt = "/estrela";
          return view('result',compact('msg','rt'));
        }else{
          $msg = "Erro ao tentar modificar a Estrela.";
          $rt = "/estrela/create";
          return view('result',compact('msg','rt'));
        }
              
      }catch(Exception $e){
        $msg = "Erro ao tentar modificar a Estrela.";
        $rt = "/estrela/create";
        return view('result',compact('msg','rt'));
      }
       
    }
    
    public function update()
    {
        return view('crudestrela/update');
    }
}
