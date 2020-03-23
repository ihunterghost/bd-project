<?php

namespace App\Http\Controllers\CRUDSnController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Exception;

class RSnController extends Controller
{
    public function readresponse(Request $request)
    {
    	$sn = DB::select('SELECT * FROM satelite_natural WHERE UPPER(nome_sn) = UPPER(?)',[$request->nome_sn]);
        return view('crudresponsesn/readresponse',compact('sn'));
    }

    public function read()
    {
        return view('crudsn/read');
    }
}
