<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvitadosController extends Controller
{
   public function index(){
       return view('invitados');
   }
}
