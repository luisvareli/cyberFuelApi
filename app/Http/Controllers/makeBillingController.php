<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class makeBillingController extends Controller
{
    public function makeXML(Request $request)
    {
        $request->validate([
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
    }


}
