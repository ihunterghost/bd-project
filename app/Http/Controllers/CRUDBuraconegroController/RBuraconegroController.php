<?php

namespace App\Http\Controllers\CRUDBuraconegroController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Exception;

class RBuraconegroController extends Controller
{
    public function readresponse(Request $request)
    {   
        $buraconegro = DB::select('SELECT   bn.id_buraconegro,
                                        e.nome_estrela
                            FROM buraco_negro bn JOIN estrela e
                                ON(bn.estrela = e.id_estrela)
                            WHERE id_buraconegro = ?',
                        
                        [$request->id_buraconegro]);
        return view('crudresponseburaconegro/readresponse',compact('buraconegro'));

    }

    public function read()
    {
        return view('crudburaconegro/read');
    }
}
