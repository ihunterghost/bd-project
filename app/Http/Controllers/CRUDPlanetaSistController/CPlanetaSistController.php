<?php

namespace App\Http\Controllers\CRUDPlanetaSistController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Exception;

class CPlanetaSistController extends Controller
{
    
    public function createresponse(Request $request)
    {
        try{
            $planetasist = DB::insert('INSERT INTO planeta_sist VALUES(DEFAULT,?,?)',
                                    [$request->planeta,
                                    $request->sist_planetario]);
            $msg = "Planeta de id: $request->planeta inserido ao sistema de id: $request->sist_planetario";
            $rt = "/planetasist";
            return view('result',compact('msg','rt'));                      
        }catch(Exception $e){
            $msg = "Erro ao tentar inserir a planeta no sistema";
            $rt = "/planetasist/create";
            return view('result',compact('msg','rt'));
        }
    }

  
    public function create()
    {
        return view('crudplanetasist/create');
    }
    
}
