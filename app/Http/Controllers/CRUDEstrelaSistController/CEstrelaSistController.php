<?php

namespace App\Http\Controllers\CRUDEstrelaSistController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Exception;


class CEstrelaSistController extends Controller
{
    
    public function createresponse(Request $request)
    {
        try{
            $estrelasist = DB::insert('INSERT INTO estrela_sist VALUES(DEFAULT,?,?)',
                                    [$request->estrela,
                                    $request->sist_planetario]);
                $msg = "Estrela de id: $request->estrela inserido ao Sistema Planetário de id: $request->sist_planetario";
                $rt = "/estrelasist/create";
                return view('result',compact('msg','rt'));
        }catch(Exception $e){
            $msg = "Erro ao tentar inserir a Estrela no Sistema Planetário.";
            $rt = "/estrelasist/create";
            return view('result',compact('msg','rt'));
        }

      
    }

  
    public function create()
    {
        return view('crudestrelasist/create');
    }
    
}
