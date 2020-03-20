<?php

namespace App\Http\Controllers\CRUDOrbitarController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Exception;

class DOrbitarController extends Controller
{
    
    public function deleteresponse(Request $request)
    {
       
        try{
            
            $orbitar = DB::delete('DELETE FROM orbitar WHERE id_orbitar = ?',[$request->id_orbitar]);

            if($orbitar == 1){
                $msg = "Orbita de id: $request->id_orbitar foi deletada com sucesso.";
                $rt = "/orbitar";
                return view('result',compact('msg','rt'));
            }else{
                $msg = "Erro ao tentar deletar a orbita.";
                $rt = "/orbitar/delete";
                return view('result',compact('msg','rt'));
            }
        }catch(Exception $e){
            $msg = "Erro ao tentar deletar a orbita.";
            $rt = "/orbitar/delete";
            return view('result',compact('msg','rt'));
        }
    }

    public function delete()
    {
        return view('crudorbitar/delete');
    }
}
