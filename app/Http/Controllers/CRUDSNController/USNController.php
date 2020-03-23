<?php

namespace App\Http\Controllers\CRUDSnController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Exception;

class USnController extends Controller
{
    
    public function updateresponse(Request $request)
    {   
      try{
        $sn =  DB::update('UPDATE satelite_natural
    			    SET
    					  nome_sn = ?,
    					  tam_sn = ?,
    					  peso_sn = ?,
                comp_sn = ?
              
    			    WHERE id_sn = ?',
    					  [$request->nome_sn,
                $request->tam_sn,
                $request->peso_sn,
                $request->comp_sn,
                $request->id_sn]);

        if($sn == 1){
          $msg = "Satélite Natural de id: $request->id_sn foi modificado com sucesso.";
          $rt = "/sn";
          return view('result',compact('msg','rt'));
        }else{
          $msg = "Erro ao tentar modificar Satélite Natural.";
          $rt = "/sn/update";
          return view('result',compact('msg','rt'));
        }
              
      }catch(Exception $e){
        $msg = "Erro ao tentar modificar Satélite Natural.";
        $rt = "/sn/update";
        return view('result',compact('msg','rt'));
      }
    }
    
    public function update()
    {
        return view('crudsn/update');
    }
}
