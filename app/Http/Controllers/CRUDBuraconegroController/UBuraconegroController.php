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
        $buraconegro =  DB::update('UPDATE buraconegro
                SET
                  estrela = ?
                
                WHERE id_buraconegro = ?',
                  [$request->estrela,
                  $request->id_buraconegro]);
        if($buraconegro == 1){
          $msg = "Buraco Negro de id: $request->id_buraconegro foi modificado com sucesso.";
          $rt = "/buraconegro";
          return view('result',compact('msg','rt'));
        }else{
          $msg = "Erro ao tentar modificar o Buraco Negro.";
          $rt = "/buraconegro/create";
          return view('result',compact('msg','rt'));
        }
      }catch(Exception $e){
        $msg = "Erro ao tentar modificar o Buraco Negro.";
        $rt = "/buraconegro/create";
        return view('result',compact('msg','rt'));
      }
      
        
    }
    
    public function update()
    {
        return view('crudburaconegro/update');
    }
}
