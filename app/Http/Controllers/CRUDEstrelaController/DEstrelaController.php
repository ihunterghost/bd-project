<?php

namespace App\Http\Controllers\CRUDEstrelaController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Exception;

class DEstrelaController extends Controller
{
    
    public function deleteresponse(Request $request)
    {
        try{
            $estrela = DB::delete('DELETE FROM estrela WHERE id_estrela = ?',[$request->id_estrela]);

            if($estrela == 1){
                $msg = "Estrela de id: $request->id_estrela foi deletada com sucesso.";
                $rt = "/estrela";
                return view('result',compact('msg','rt'));
            }else{
                $msg = "Erro ao tentar deletar a Estrela.";
                $rt = "/estrela/delete";
                return view('result',compact('msg','rt'));
            }
        }catch(Exception $e){
            $msg = "Erro ao tentar deletar a Estrela.";
            $rt = "/estrela/delete";
            return view('result',compact('msg','rt'));
        }
    }

    public function delete()
    {
        return view('crudestrela/delete');
    }
}
