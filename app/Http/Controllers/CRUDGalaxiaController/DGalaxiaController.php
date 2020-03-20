<?php

namespace App\Http\Controllers\CRUDGalaxiaController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Exception;


class DGalaxiaController extends Controller
{
    
    public function deleteresponse(Request $request)
    {
        try{
            $galaxia = DB::delete('DELETE FROM galaxia WHERE id_galaxia = ?',[$request->id_galaxia]);

            if($galaxia == 1){
                $msg = "Galaxia de id: $request->id_estrela foi deletada com sucesso";
                $rt = "/galaxia";
                return view('result',compact('msg','rt'));
            }else{
                $msg = "Erro ao tentar deletar a galaxia";
                $rt = "/galaxia/delete";
                return view('result',compact('msg','rt'));
            }
        }catch(Exception $e){
            $msg = "Erro ao tentar deletar a galaxia";
            $rt = "/galaxia/delete";
            return view('result',compact('msg','rt'));
        }
    }

    public function delete()
    {
        return view('crudgalaxia/delete');
    }
}
