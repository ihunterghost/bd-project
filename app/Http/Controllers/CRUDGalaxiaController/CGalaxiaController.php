<?php

namespace App\Http\Controllers\CRUDGalaxiaController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Exception;


class CGalaxiaController extends Controller
{
    
    public function createresponse(Request $request)
    {

        try{
    	    $galaxia = DB::insert('INSERT INTO galaxia VALUES(DEFAULT,0,?,?)',
    							[
    							$request->dist_terra,
    							$request->nome_galaxia]);
            $msg = "Galáxia $request->nome_galaxia inserida com sucesso.";
            $rt = "/galaxia";
            return view('result',compact('msg','rt'));
           
        }catch(Exception $e){
            $msg = "Erro ao tentar inserir a Galáxia.";
            $rt = "/galaxia/create";
            return view('result',compact('msg','rt'));
        }
    }

    public function create()
    {
        return view('crudgalaxia/create');
    }
    
}
