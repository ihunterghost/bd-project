<?php

namespace App\Http\Controllers\CRUDSistController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Exception;

class RSistController extends Controller
{
    public function readresponse(Request $request)
    {
    	$sist = DB::select('SELECT * FROM sist_planetario WHERE nome_sist = ?',[$request->nome_sist]);
        return view('crudresponsesist/readresponse',compact('sist'));
    }

    public function read()
    {
        return view('crudsist/read');
    }
}
