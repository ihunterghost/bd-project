<?php

namespace App\Http\Controllers\CRUDPlanetaSistController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Exception;

class DPlanetaSistController extends Controller
{
    
    public function deleteresponse(Request $request)
    {
        try{
            $planetasist = DB::delete('DELETE FROM planeta_sist WHERE id_planetasist = ?',[$request->id_planetasist]);
            if($planetasist == 1){
                $msg = "Planeta-Sist de id: $request->id_planetasist foi deletada com sucesso";
                $rt = "/planetasist";
                return view('result',compact('msg','rt'));
            }else{
                $msg = "Erro ao tentar deletar Planeta-Sist.";
                $rt = "/planetasist/delete";
                return view('result',compact('msg','rt'));
            }
        }catch(Exception $e){
            $msg = "Erro ao tentar deletar Planeta-Sist.";
            $rt = "/planetasist/delete";
            return view('result',compact('msg','rt'));
        }
    }

    public function delete()
    {
        return view('crudplanetasist/delete');
    }
}
