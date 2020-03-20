<?php

namespace App\Http\Controllers\CRUDSnController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Exception;

class DSnController extends Controller
{
    
    public function deleteresponse(Request $request)
    {
        try{
            $sn = DB::delete('DELETE FROM satelite_natural WHERE id_sn = ?',[$request->id_sn]);

            if($sn == 1){
                $msg = "Satélite Natural de id: $request->id_sn foi deletado com sucesso.";
                $rt = "/sn";
                return view('result',compact('msg','rt'));
            }else{
                $msg = "Erro ao tentar deletar Satélite Natural.";
                $rt = "/sn/delete";
                return view('result',compact('msg','rt'));
            }
        }catch(Exception $e){
            $msg = "Erro ao tentar deletar Satélite Natural.";
            $rt = "/sn/delete";
            return view('result',compact('msg','rt'));
        }
    }

    public function delete()
    {
        return view('crudsn/delete');
    }
}
