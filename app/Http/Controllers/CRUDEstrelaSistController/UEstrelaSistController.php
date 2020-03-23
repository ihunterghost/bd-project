<?php

namespace App\Http\Controllers\CRUDEstrelaSistController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Exception;


class UEstrelaSistController extends Controller
{
    
    public function updateresponse(Request $request)
    {   
      try{
        $resultselect = DB::SELECT('SELECT estrela
                                    FROM estrela_sist
                                    WHERE id_estrelasist = ? ',
                                    [$request->id_estrelasist]);

        if($resultselect[0]->estrela != $request->estrela){
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
        }  

        $estrelasist =  DB::update('UPDATE estrela_sist
                SET
                estrela = ?,
                sist_planetario = ?
                
                WHERE id_estrelasist = ?',
                [$request->estrela,
                $request->sist_planetario,
                $request->id_estrelasist]);
        if($estrelasist == 1){
          $msg = "Estrela-Sist de id: $request->id_estrelasist foi modificada com sucesso.";
          $rt = "/estrelasist";
          return view('result',compact('msg','rt'));
        }else{
          $msg = "Erro ao tentar modificar a Estrela-Sist.";
          $rt = "/estrelasist/update";
          return view('result',compact('msg','rt'));
        }
      }catch(Exception $e){
        $msg = "Erro ao tentar modificar a Estrela-Sist.";
        $rt = "/estrelasist/update";
        return view('result',compact('msg','rt'));
      }
    }
    
    public function update()
    {
        return view('crudestrelasist/update');
    }
}
