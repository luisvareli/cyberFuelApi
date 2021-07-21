<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BillingController extends Controller
{
    public function makeXML(Request $request)
    {
         $this->validate($request,[
            'api_key' => 'required',
            'sucursal' => 'required',
            'terminal' => 'required',
            'tipo' => 'required',
            'comprobante' => 'required',
            'pais' => 'required',
            'dia' => 'required',
            'mes' => 'required',
            'anno' => 'required',
            'situacion_presentacion' => 'required',
        ]);
         dd('dee');
    }
}
