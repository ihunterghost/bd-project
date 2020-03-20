<?php

namespace App\Http\Controllers\CRUDBuraconegroController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Exception;


class CBuraconegroController extends Controller
{
    
    public function createresponse(Request $request)
    {
        try{
            $estrela = DB::select('SELECT morte FROM estrela WHERE id_estrela = ?',[$request->id_estrela]);
            if($estrela = true){
    	        $orbitar = DB::insert('INSERT INTO buraconegro VALUES(DEFAULT,?)',
                                    [$request->id_estrela]);

                $msg = "Buraco negro criado a partir da antiga estrela de id: $request->id_estrela.";
                $rt = "/buraconegro";
                return view('result',compact('msg','rt'));
            }else
                $msg = "Estrela não está morta";
                $rt = "/buraconegro/create";
                return view('result',compact('msg','rt'));
        }catch(Exception $e){
            $msg = "Erro ao tentar criar o Buraco Negro.";
            $rt = "/buraconegro/create";
            return view('result',compact('msg','rt'));
        }
    }

  
    public function create()
    {
        return view('crudburaconegro/create');
    }
    
}