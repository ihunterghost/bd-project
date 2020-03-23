<?php

namespace App\Http\Controllers\CRUDEstrelaController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Exception;


class REstrelaController extends Controller
{
    public function readresponse(Request $request)
    {
        $estrela = DB::select('SELECT * FROM estrela WHERE nome_estrela = ?',[$request->nome_estrela]);
        if(sizeof($planeta) > 0){
            if(strcasecmp($estrela[0]->morte,'1') == 0){
                $estrela[0]->morte='Sim';
            }else{
                $estrela[0]->morte='Não';
            }

            if(strcasecmp($estrela[0]->possui_sn_estrela,'1') == 0){
                $estrela[0]->possui_sn_estrela='Sim';
            }else{
                $estrela[0]->possui_sn_estrela='Não';
            }
        }
        return view('crudresponseestrela/readresponse',compact('estrela'));
    }

    public function read()
    {
        return view('crudestrela/read');
    }
}
