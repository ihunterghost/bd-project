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
        $resultselect = DB::SELECT('SELECT planeta
                                    FROM planeta_sist
                                    WHERE id_planetasist = ? ',
                                    [$request->id_planetasist]);

        if($resultselect[0]->planeta != $request->planeta){
            $sist= DB::select('SELECT qtd_planetas 
                                   FROM sist_planetario 
                                   WHERE id_sist = ?',[$request->sist_planetario]);
            $sist[0]->qtd_planetas = $sist[0]->qtd_planetas + 1;
            $qnt = $sist[0]->qtd_planetas;

            $sistupdate =  DB::update('UPDATE sist_planetario
    			    SET qtd_planetas = ?
    			    WHERE id_sist = ?',
                [$qnt,
                $request->sist_planetario]);
        }                     
        $planetasist =  DB::update('UPDATE planeta_sist
                                    SET
                                      planeta = ?,
                                      sist_planetario = ?
                                    
                                    WHERE id_planetasist = ?',
                                    [$request->planeta,
                                    $request->sist_planetario,
                                    $request->id_planetasist]);
        if($planetasist == 1){
          $msg = "Planeta-Sist de id: $request->id_planetasist modificado com sucesso.";
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
