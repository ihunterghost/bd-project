<?php

namespace App\Http\Controllers\CRUDEstrelaSistController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Exception;

class DEstrelaSistController extends Controller
{
    
    public function deleteresponse(Request $request)
    {   
        try{
            $estrelasist = DB::delete('DELETE 
                                        FROM estrela_sist
                                        WHERE id_estrelasist = ?',
                                        [$request->id_estrelasist]);
            if($estrelasist == 1){
                $msg = "Estrela-Sist de id: $request->id_estrelasist foi deletada com sucesso";
                $rt = "/estrelasist";
                return view('result',compact('msg','rt'));
            }else{
                $msg = "estrelasist não existe";
                $rt = "/estrelasist/delete";
                return view('result',compact('msg','rt'));
            }
        }catch(Exception $e){
            $msg = "Erro ao tentar deletar estrelasist";
            $rt = "/estrelasist/delete";
            return view('result',compact('msg','rt'));
        }
    }

    public function delete()
    {
        return view('crudestrelasist/delete');
    }
}
