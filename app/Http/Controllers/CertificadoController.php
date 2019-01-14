<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CertificadoController extends Controller
{
    public function imprimir($id){
        //busca usuario por id
        echo "imprimiendo cerficado para usuario de id = ".$id;
    }
}
