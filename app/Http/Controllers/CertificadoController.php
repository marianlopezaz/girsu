<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Participantes;
use PDF;
use Mail;
use Yajra\Datatables\Datatables;
use PDFMerger;

class CertificadoController extends Controller
{
    public function index(){
        $participantes = Participantes::all();
        return view('certificados', compact('participantes'));
    }
    public function dataTableCertificados(){
        $participantes = Participantes::select(['eventbrite_id', 'nombre', 'apellido', 'dni', 'ticket_type', 'mail'])->where('estadoParticipante', '=', 0);
        return Datatables::of($participantes)->make(true);
    }

    public function MailVirtualIndividual(Request $request){
        //busca usuario por id
        $id = $request['id'];
        $participante = Participantes::where('eventbrite_id', $id)->get()->first();
        //Arma el pdf
        $pdf = PDF::loadView('layoutcert', compact('participante'))->setPaper('a4', 'landscape');
        //Manda mail automaticamente
        Mail::send(['text'=>'textoMail'],['name' => 'GIRSU II'], function($mensage) use($pdf, $participante){
            $mensage->to($participante->mail, $participante->nombre . ' ' . $participante->apellido)->subject('Certificado Congreso Girsu II - '. $participante->nombre . ' ' . $participante->apellido);
            $mensage->from('nicobaudon01@gmail.com', 'Nicolás');
            $mensage->attachData($pdf->output(),'Certificado '. $participante->nombre . ' ' . $participante->apellido .'.pdf');
        });
        return \Response::json();
    }
    public function imprimirPreImpreso($id){
        //busca usuario por id
        $participante = Participantes::where('eventbrite_id', $id)->get()->first();
        $pdf = PDF::loadView('layoutcertPre', compact('participante'))->setPaper('a4', 'landscape');
        return $pdf->stream('Certificado '. $participante->nombre . ' ' . $participante->apellido .'.pdf');
    }
    public function impresionGral(Request $request){
        $ids= $request->check_impresion;
        $participantes = [];
        foreach($ids as $id) {
            $participante = Participantes::where('eventbrite_id', $id)->get()->first();
            array_push($participantes, $participante);
        }
        $pdf = PDF::loadView('layoutcertGral', compact('participantes'))->setPaper('a4', 'landscape');
        return $pdf->stream('Certificados.pdf');
    }
    public function mailGral(Request $request){
        $ids= $request->check_mail;
        foreach($ids as $id){
            $participante = Participantes::where('eventbrite_id', $id)->get()->first();
            //Arma el pdf
            $pdf = PDF::loadView('layoutcert', compact('participante'))->setPaper('a4', 'landscape');
            //Manda mail automaticamente
            Mail::send(['text'=>'textoMail'],['name' => 'GIRSU II'], function($mensage) use($pdf, $participante){
                $mensage->to($participante->mail, $participante->nombre . ' ' . $participante->apellido)->subject('Certificado Congreso Girsu II - '. $participante->nombre . ' ' . $participante->apellido);
                $mensage->from('nicobaudon01@gmail.com', 'Nicolás');
                $mensage->attachData($pdf->output(),'Certificado '. $participante->nombre . ' ' . $participante->apellido .'.pdf');
            });
        }
        return redirect('certificados')->with('mensaje', 'Emails enviados correctamente');
    }
}
