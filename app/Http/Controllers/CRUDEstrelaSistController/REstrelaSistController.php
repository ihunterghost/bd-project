<?php

namespace App\Http\Controllers\CRUDEstrelaSistController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Exception;


class REstrelaSistController extends Controller
{
    public function readresponse(Request $request)
    {
    	$estrelasist = DB::select('SELECT   es.id_estrelasist,
                                            e.nome_estrela,
                                            sp.nome_sist,
                                            
                                FROM   estrela_sist es JOIN sist_planetario sp
                                    ON (es.sist_planetario = sp.id_sist) 
                                    JOIN estrela e 
                                    ON (e.id_estrela = es.estrela)
                                WHERE id_estrelasist = ?',
                                [$request->id_estrelasist]);
        return view('crudresponseestrelasist/readresponse',compact('estrelasist'));
    }

    public function read()
    {
        return view('crudestrelasist/read');
    }
}
