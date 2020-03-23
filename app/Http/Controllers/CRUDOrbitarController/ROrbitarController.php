<?php

namespace App\Http\Controllers\CRUDOrbitarController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Exception;

class ROrbitarController extends Controller
{
    public function readresponse(Request $request)
    {   
        $orbitar = DB::select('SELECT 
                                orb.id_orbitar,
                                pl.nome_planeta,
                                es.nome_estrela,
                                sn.nome_sn
                            FROM orbitar orb FULL JOIN planeta pl ON
                                orb.planeta = pl.id_planeta FULL JOIN
                                estrela es ON orb.estrela = es.id_estrela FULL join
                                satelite_natural sn ON orb.sn  = sn.id_sn
                            WHERE id_orbitar = ?',
                        
                        [$request->id_orbitar]);
        return view('crudresponseorbitar/readresponse',compact('orbitar'));

    }

    public function read()
    {
        return view('crudorbitar/read');
    }
}
