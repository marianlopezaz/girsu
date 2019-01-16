<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvitadosController extends Controller
{
   public function index(){
       require '..\excelData.php';
       $invitados = $listFeedInvitados->getEntries();
       //dd(sizeof($invitados));
      return view('invitados',compact('invitados'));     
    }
}

