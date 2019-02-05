<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use PDF;

class CertificadoController extends Controller
{
    public function imprimir(){
        //busca usuario por id
        $pdf = PDF::loadView('layoutcert')->setPaper('a4', 'landscape');;
        return $pdf->stream('certificado.pdf');
    }
}
