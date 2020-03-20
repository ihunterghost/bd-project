<?php

namespace App\Http\Controllers\CRUDPlanetaController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Exception;

class RPlanetaController extends Controller
{
    public function readresponse(Request $request)
    {
    	$planeta = DB::select('SELECT * FROM planeta WHERE nome_planeta = ?',[$request->nome_planeta]);
        return view('crudresponseplaneta/readresponse',compact('planeta'));
    }

    public function read()
    {
        return view('crudplaneta/read');
    }
}
