<?php

namespace App\Http\Controllers\CRUDOrbitarController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Exception;


class COrbitarController extends Controller
{
    
    public function createresponse(Request $request)
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
                $rt = "/orbitar/create";
                return view('result',compact('msg','rt'));
            }
    	    $orbitar = DB::insert('INSERT INTO orbitar VALUES(DEFAULT,?,?,?)',
                                    [$request->id_planeta,
                                    $request->id_estrela,
                                    $request->id_sn]);
            $msg = "Orbita dos corpos de id: $request->id_estrela $request->id_planeta  $request->id_sn inseridos com sucesso.";
            $rt = "/orbitar";
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
            return view('result',compact('msg','rt'));
        }catch(Exception $e){
            $msg = "Erro ao tentar criar uma orbita.";
            $rt = "/orbitar/create";
            return view('result',compact('msg','rt'));
        }
    }

  
    public function create()
    {
        return view('crudorbitar/create');
    }
    
}
