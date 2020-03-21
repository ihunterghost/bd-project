<?php

namespace App\Http\Controllers\CRUDPlanetaSistController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Exception;

class UPlanetaSistController extends Controller
{
    
    public function updateresponse(Request $request)
    {
      
     try{
          
        $planetasist =  DB::update('UPDATE planeta_sist
                                    SET
                                      planeta = ?,
                                      sist_planetario = ?
                                    
                                    WHERE id_planetasist = ?',
                                    [$request->planeta,
                                    $request->sist_planetario,
                                    $request->id_planetasist]);
        if($planetasist == 1){
          $msg = "planetasist de id: $request->id_planetasist modificada com sucesso";
          $rt = "/planetasist";
          return view('result',compact('msg','rt'));
        }else{
          $msg = "Erro ao tentar modificar a Planeta-Sist.";
          $rt = "/planetasist/update";
          return view('result',compact('msg','rt'));
        }
      }catch(Exception $e){
        $msg = "Erro ao tentar modificar a Planeta-Sist.";
        $rt = "/planetasist/update";
        return view('result',compact('msg','rt'));
      }
    }
    
    public function update()
    {
        return view('crudplanetasist/update');
    }
}
