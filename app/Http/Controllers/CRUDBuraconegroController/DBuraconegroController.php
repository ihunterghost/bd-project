<?php

namespace App\Http\Controllers\CRUDBuraconegroController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Exception;

class DBuraconegroController extends Controller
{
    
    public function deleteresponse(Request $request)
    {
       
        try{
            
            $buraconegro = DB::delete('DELETE FROM buraconegro WHERE id_buraconegro = ?',[$request->id_buraconegro]);

            if($buraconegro == 1){
                $msg = "Buraco Negro de id: $request->id_buraconegro foi deletado com sucesso.";
                $rt = "/buraconegro";
                return view('result',compact('msg','rt'));
            }else{
                $msg = "Erro ao tentar deletar o Buraco Negro.";
                $rt = "/buraconegro/delete";
                return view('result',compact('msg','rt'));
            }
        }catch(Exception $e){
            $msg = "Erro ao tentar deletar o Buraco Negro.";
            $rt = "/buraconegro/delete";
            return view('result',compact('msg','rt'));
        }
    }

    public function delete()
    {
        return view('crudburaconegro/delete');
    }
}
