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
