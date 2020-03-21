<?php

namespace App\Http\Controllers\CRUDBuraconegroController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Exception;

class UBuraconegroController extends Controller
{
    
    public function updateresponse(Request $request)
    {   
      try{
        $estrela = DB::select("SELECT morte FROM estrela WHERE id_estrela = ? and morte = 'true'",[$request->id_estrela]);
        echo sizeof($estrela);
        if(sizeof($estrela)>0){
          $buraconegro =  DB::update('UPDATE buraco_negro
                  SET
                    estrela = ?
                  
                  WHERE id_buraconegro = ?',
                    [$request->id_estrela,
                    $request->id_buraconegro]);
  
          if($buraconegro == 1){
            $msg = "Buraco Negro de id: $request->id_buraconegro foi modificado com sucesso.";
            $rt = "/buraconegro";
            return view('result',compact('msg','rt'));
          }else{
            $msg = "Erro ao tentar modificar o Buraco Negro.";
            $rt = "/buraconegro/update";
            return view('result',compact('msg','rt'));
          }
        }
      }catch(Exception $e){
        $msg = "Error grave";
        $rt = "/buraconegro/update";
        return view('result',compact('msg','rt'));
      }
      
        
    }
    
    public function update()
    {
        return view('crudburaconegro/update');
    }
}
