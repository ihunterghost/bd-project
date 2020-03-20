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
    	    $orbitar = DB::insert('INSERT INTO orbitar VALUES(DEFAULT,?,?,?)',
                                    [$request->id_estrela,
                                    $request->id_planeta,
                                    $request->id_sn]);
            $msg = "Orbita dos corpos $request->id_estrela, $request->id_planeta,  $request->id_sn inseridos com sucesso.";
            $rt = "/orbitar";
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