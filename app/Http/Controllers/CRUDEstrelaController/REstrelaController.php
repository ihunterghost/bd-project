<?php

namespace App\Http\Controllers\CRUDEstrelaController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Exception;


class REstrelaController extends Controller
{
    public function readresponse(Request $request)
    {
    	$estrela = DB::select('SELECT * FROM estrela WHERE nome_estrela = ?',[$request->nome_estrela]);
        return view('crudresponseestrela/readresponse',compact('estrela'));
    }

    public function read()
    {
        return view('crudestrela/read');
    }
}
