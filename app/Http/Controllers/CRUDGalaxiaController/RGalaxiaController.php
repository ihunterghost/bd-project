<?php

namespace App\Http\Controllers\CRUDGalaxiaController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Exception;


class RGalaxiaController extends Controller
{
    public function readresponse(Request $request)
    {
    	$galaxia = DB::select('SELECT * FROM galaxia WHERE nome_galaxia = ?',[$request->nome_galaxia]);
        return view('crudresponsegalaxia/readresponse',compact('galaxia'));
    }

    public function read()
    {
        return view('crudgalaxia/read');
    }
}
