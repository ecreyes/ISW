<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
    	return view('index');
    }

    public function callR(Request $request)
    {
    	// $request->input('parametro');
    	// $request->all();
    	// $request->has('parametro');
    	//return $request->input('parametro');

        $param = $request->input('parametro');
        //$output=shell_exec("Rscript scripts/test.R $param");
        //echo $output;

        //echo "<img src='output/test.png'>";
    }
}
