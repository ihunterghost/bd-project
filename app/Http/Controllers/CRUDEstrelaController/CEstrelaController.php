<?php

namespace App\Http\Controllers\CRUDEstrelaController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Exception;


class CEstrelaController extends Controller
{
    
    public function createresponse(Request $request)
    {

        try{
            
            if(strcasecmp($request->tipo,"Anã Vermelha") == 0){
                $request->tipo = 1;
            }else{
                if(strcasecmp($request->tipo,"Anã Branca") == 0){
                    $request->tipo = 2;
                }else{
                    if(strcasecmp($request->tipo,"Estrela Binária") == 0){
                        $request->tipo = 3;
                    }else{
                        if(strcasecmp($request->tipo,"Gigante Azul") == 0){
                            $request->tipo = 4;
                        }else{
                            if(strcasecmp($request->tipo,"Gigante Vermelho") == 0){
                                $request->tipo = 5;
                            }
                        }
                    }
                }
            }
            echo $request->tipo;
    	    $estrela = DB::insert('INSERT INTO estrela VALUES(DEFAULT,?,?,?,?,?,?,?)',
    							[$request->nome_estrela,
    							$request->tam_estrela,
    							$request->idade_estrela,
    							'false',
    							$request->dist_terra_estrela,
                                $request->tipo,
                                'false']);
            $msg = "Estrela de nome $request->nome_estrela foi inserida com sucesso.";
            $rt = "/estrela";
            return view('result',compact('msg','rt'));
        }catch(Exception $e){
            $msg = "Erro ao tentar inserir a Estrela.";
            $rt = "/estrela/create";
            return view('result',compact('msg','rt'));
        }
    }

    public function create()
    {
        return view('crudestrela/create');
    }
    
}
