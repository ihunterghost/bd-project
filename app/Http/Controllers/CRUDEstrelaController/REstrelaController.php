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
        $estrela = DB::select('SELECT * FROM estrela WHERE UPPER(nome_estrela) = UPPER(?)',[$request->nome_estrela]);
        if(sizeof($estrela) > 0){
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
            
            if(strcasecmp($estrela[0]->tipo,'1') == 0){
                $estrela[0]->tipo = 'Anã Vermelha';
            }
            if(strcasecmp($estrela[0]->tipo,'2') == 0){
                $estrela[0]->tipo = 'Anã Branca';
            }
            if(strcasecmp($estrela[0]->tipo,'3') == 0){
                $estrela[0]->tipo = 'Estrela Binária';
            }
            if(strcasecmp($estrela[0]->tipo,'4') == 0){
                $estrela[0]->tipo = 'Gigante Azul';
            }
            if(strcasecmp($estrela[0]->tipo,'5') == 0){
                $estrela[0]->tipo = 'Gigante Vermelha';
            }


        }
        return view('crudresponseestrela/readresponse',compact('estrela'));
    }

    public function read()
    {
        return view('crudestrela/read');
    }
}
