<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

class PagesController extends Controller
{
    public function home()
    {
    	return view('index');
    }

    public function callR(Request $request)
    {
        //->store('public');      
        $request->file('csv')->storePubliclyAs('scripts','archivo.csv','public');
        shell_exec("Rscript scripts/grafico.R");
    	// $request->input('parametro');
    	// $request->all();
    	// $request->has('parametro');
    	//return $request->input('parametro');

        $anios = $request->input('anios');
        $tasa = $request->input('tasa');
        $precio = $request->input('precio');
        $output=shell_exec("Rscript scripts/simulacion.R $anios $tasa $precio");
        echo $output;

        echo "<img src='output/test.png'>";
    }
}
