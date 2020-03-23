<?php

namespace App\Http\Controllers\CRUDOrbitarController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Exception;

class UOrbitarController extends Controller
{
    
    public function updateresponse(Request $request)
    {   
      try{
        $cont = 0;
        if($request->id_planeta != ''){
            $cont =$cont+1;
        }
        if($request->id_estrela != ''){
            $cont =$cont+1;
        }
        if($request->id_sn != ''){
            $cont =$cont+1;
        }
        if($cont<2){
            $msg = "É necessario inserir 2 ou 3 corpos celestes.";
            $rt = "/orbitar/update";
            return view('result',compact('msg','rt'));
        }
        $orbitar =  DB::update('UPDATE orbitar
                SET
                  estrela = ?,
                  planeta = ?,
                  sn = ?
                
                WHERE id_orbitar = ?',
                  [$request->id_estrela,
                  $request->id_planeta,
                  $request->id_sn,
                  $request->id_orbitar]);
          if($request->id_sn != ''){
            $updateplaneta = DB::update("UPDATE planeta
                                        SET
                                        possui_sn_planeta = 'true'
                                        
                                        WHERE id_planeta = ?",
                                        [$request->id_planeta]);

            $updatestrela = DB::update("UPDATE estrela
                                        SET
                                        possui_sn_estrela = 'true'
                                        
                                        WHERE id_estrela = ?",
                                        [$request->id_estrela]);
        }
        if($orbitar == 1){
          $msg = "Orbita de id: $request->id_orbitar foi modificada com sucesso.";
          $rt = "/orbitar";
          return view('result',compact('msg','rt'));
        }else{
          $msg = "Erro ao tentar modificar a Orbita.";
          $rt = "/orbitar/update";
          return view('result',compact('msg','rt'));
        }
      }catch(Exception $e){
        $msg = "Erro ao tentar modificar a Orbita.";
        $rt = "/orbitar/update";
        return view('result',compact('msg','rt'));
      }
      
        
    }
    
    public function update()
    {
        return view('crudorbitar/update');
    }
}
