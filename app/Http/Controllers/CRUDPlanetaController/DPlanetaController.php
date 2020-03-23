<?php

namespace App\Http\Controllers\CRUDPlanetaController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Exception;

class DPlanetaController extends Controller
{
    
    public function deleteresponse(Request $request)
    {
        try{
            $planeta = DB::delete('DELETE FROM planeta WHERE id_planeta = ?',[$request->id_planeta]);

            if($planeta == 1){
                $msg = "Planeta de id: $request->id_planeta foi deletado com sucesso.";
                $rt = "/planeta";
                return view('result',compact('msg','rt'));
            }else{
                $msg = "Erro ao tentar deletar o Planeta.";
                $rt = "/planeta/delete";
                return view('result',compact('msg','rt'));
            }
        }catch(Exception $e){
            $msg = "Erro ao tentar deletar o Planeta.";
            $rt = "/planeta/delete";
            return view('result',compact('msg','rt'));
        }
    }

    public function delete()
    {
        return view('crudplaneta/delete');
    }
}
