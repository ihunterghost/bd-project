<?php

namespace App\Http\Controllers\CRUDGalaxiaController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Exception;


class UGalaxiaController extends Controller
{
    
    public function updateresponse(Request $request)
    {   
      try{
        
        $galaxia =  DB::update('UPDATE galaxia
                SET dist_terra = ?,
                nome_galaxia = ?,
                qtd_sistemas = ?
                WHERE id_galaxia = ?',
                [$request->dist_terra,
                $request->nome_galaxia,
                $request->qtd_sistemas,
                $request->id_galaxia
               ]);
                
        if($galaxia == 1){
          $msg = "Galaxia de id: $request->id_galaxia foi modificada com sucesso";
          $rt = "/galaxia";
          return view('result',compact('msg','rt'));
        }else{
          $msg = "Erro ao tentar modificar a Galáxia.";
          $rt = "/galaxia/update";
          return view('result',compact('msg','rt'));
        }
      }catch(Exception $e){
        $msg = "Erro ao tentar modificar a Galáxia.";
        $rt = "/galaxia/update";
        return view('result',compact('msg','rt'));
      }
    }
    
    public function update()
    {
        return view('crudgalaxia/update');
    }
}
