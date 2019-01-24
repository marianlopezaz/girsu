<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class CertificadoController extends Controller
{
    public function imprimir($id){
        //busca usuario por id
        $pdf = PDF::loadView('layoutcert');
        return $pdf->download('certificados.pdf');
    }
}
