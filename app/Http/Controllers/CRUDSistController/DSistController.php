<?php

namespace App\Http\Controllers\CRUDSistController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Exception;

class DSistController extends Controller
{
    
    public function deleteresponse(Request $request)
    {
        try{
            $sist = DB::delete('DELETE FROM sist_planetario WHERE id_sist = ?',[$request->id_sist]);

            if($sist == 1){
                $msg = "Sistema Planetário de id: $request->id_sist foi deletado com sucesso.";
                $rt = "/sist";
                return view('result',compact('msg','rt'));
            }else{
                $msg = "Erro ao tentar deletar o Sistema Planetário.";
                $rt = "/sist/delete";
                return view('result',compact('msg','rt'));
            }
        }catch(Exception $e){
            $msg = "Erro ao tentar deletar o Sistema Planetário.";
            $rt = "/sist/delete";
            return view('result',compact('msg','rt'));
        }
    }

    public function delete()
    {
        return view('crudsist/delete');
    }
}
