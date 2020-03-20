<?php

namespace App\Http\Controllers\CRUDPlanetaSistController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Exception;

class RPlanetaSistController extends Controller
{
    public function readresponse(Request $request)
    {
    	$sn = DB::select('SELECT ps.id_planetasist,
                                 p.nome_planeta,
                                 sp.nome_sist,
                                

                        FROM   planeta_sist ps JOIN sist_planetario sp
                                ON (ps.sist_planetario = sp.id_sist) JOIN planeta p
                                ON (p.id_planeta = ps.planeta)
                                WHERE id_planetasist = ?',
                                [$request->id_planetasist]);
        return view('crudresponseplanetasist/readresponse',compact('request'));
    }

    public function read()
    {
        return view('crudplanetasist/read');
    }
}
