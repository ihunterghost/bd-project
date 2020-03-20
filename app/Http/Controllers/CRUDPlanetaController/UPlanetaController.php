<?php

namespace App\Http\Controllers\CRUDPlanetaController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Exception;

class UPlanetaController extends Controller
{
    
    public function updateresponse(Request $request)
    {   
		try{
			$planeta = DB::update('UPDATE planeta
    			   SET  nome_planeta = ?,
    					tam_planeta = ?,
    					peso_planeta = ?,
    					vel_rotacao = ?,
    					comp_planeta = ?
    			   WHERE id_planeta = ?',
    					[$request->nome_planeta,
    					$request->tam_planeta,
						$request->peso_planeta,
						$request->vel_rotacao,
						$request->comp_planeta,
						$request->id_planeta]); 
	
			if($planeta == 1){
			  $msg = "Planeta de id: $request->id_planeta  foi modificado com sucesso.";
			  $rt = "/planeta";
			  return view('result',compact('msg','rt'));
			}else{
			  $msg = "Erro ao tentar modificar o Planeta.";
			  $rt = "/planeta/create";
			  return view('result',compact('msg','rt'));
			}
		}catch(Exception $e){
			$msg = "Erro ao tentar modificar o Planeta.";
			$rt = "/planeta/create";
			return view('result',compact('msg','rt'));
		}
    }
    
    public function update()
    {
        return view('crudplaneta/update');
    }
}
