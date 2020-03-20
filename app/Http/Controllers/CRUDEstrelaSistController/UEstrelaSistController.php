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
        $estrelasist =  DB::update('UPDATE estrela_sist
                SET
                estrela = ?,
                sist_planetario = ?,
                
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
          $rt = "/estrelasist/create";
          return view('result',compact('msg','rt'));
        }
      }catch(Exception $e){
        $msg = "Erro ao tentar modificar a Estrela-Sist.";
        $rt = "/estrelasist/create";
        return view('result',compact('msg','rt'));
      }
    }
    
    public function update()
    {
        return view('crudestrelasist/update');
    }
}
