<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function acceuil(){
        $etudiants = DB::select("SELECT * FROM etudiants");
        return view('etudiant',compact('etudiants'));
    }
}
