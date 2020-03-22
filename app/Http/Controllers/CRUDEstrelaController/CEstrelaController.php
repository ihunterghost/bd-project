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
            $butaoradiotipo = $_POST['tipo'];
            if(strcasecmp($butaoradiotipo,"Anã Vermelha") == 0){
                $butaoradiotipo = 1;
            }else{
                if(strcasecmp($butaoradiotipo,"Anã Branca") == 0){
                    $butaoradiotipo = 2;
                }else{
                    if(strcasecmp($butaoradiotipo,"Estrela Binária") == 0){
                        $butaoradiotipo = 3;
                    }else{
                        if(strcasecmp($butaoradiotipo,"Gigante Azul") == 0){
                            $butaoradiotipo = 4;
                        }else{
                            if(strcasecmp($butaoradiotipo,"Gigante Vermelha") == 0){
                                $butaoradiotipo = 5;
                            }
                        }
                    }
                }
            }
            $butaoradiomorte = $_POST['morte'];
            if(strcasecmp($butaoradiomorte,"Sim") == 0){
                $butaoradiomorte = 'true';
            }else{
                if(strcasecmp($butaoradiomorte,"Não") == 0){
                    $butaoradiomorte = 'false';
                }
            }

            if(strcasecmp($butaoradiomorte,"true") == 0 && $butaoradiotipo<5){
                $msg = "Estrela so pode ser cadastrada como morta se for Gigante Vermelha";
                $rt = "/estrela/create";
                return view('result',compact('msg','rt'));
            }
    	    $estrela = DB::insert('INSERT INTO estrela VALUES(DEFAULT,?,?,?,?,?,?,?)',
    							[$request->nome_estrela,
    							$request->tam_estrela,
    							$request->idade_estrela,
    							'false',
    							$request->dist_terra_estrela,
                                $butaoradiotipo,
                                $butaoradiomorte]);
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
