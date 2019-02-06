<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use PDF;
use Mail;

class CertificadoController extends Controller
{
    public function MailVirtualIndividual(){
        //busca usuario por id
        $pdf = PDF::loadView('layoutcert')->setPaper('a4', 'landscape');;
        //return $pdf->download('certificado Virtual.pdf');
        //Manda mail automaticamente
        Mail::send(['text'=>'textoMail'],['name' => 'Nicolas'], function($mensage) use($pdf){
            $mensage->to('nicobaudon01@gmail.com', 'Nicolás')->subject('Certificado Girsu II');
            $mensage->from('nicobaudon01@gmail.com', 'Nicolás');
            $mensage->attachData($pdf->output(),'Certificado Nicolas.pdf');
        });

    }
    public function imprimirPreImpreso(){
        //busca usuario por id
        $pdf = PDF::loadView('layoutcertPre')->setPaper('a4', 'landscape');;
        return $pdf->stream('certificado PreImpreso.pdf');
    }
}
