<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EtudiantController extends Controller
{
    public function acceuil(){
        $etudiants = DB::select("SELECT * FROM etudiants ORDER BY id DESC");
        return view('etudiant',compact('etudiants'));
    }

    public function store(Request $request){

        $request->validate([
            'noms' => 'required',
            'age' => 'required'
        ]);

        DB::table('etudiants')->insert([
            'noms' => $request->noms,
            'age' => $request->age
        ]);

        // return redirect()->route('etudiant')->with('message','Inseré avec success');
        return response()->json(['message' => 'inserted successfully']);
    }

    public function edit($id){
        $data = DB::select("SELECT * FROM etudiants WHERE id= ?",[$id]);

        $etudiant = $data[0];
        return view('edit', compact('etudiant'));
    }

    public function update(Request $request){
        DB::update("UPDATE etudiants SET noms= ?, age= ? WHERE id= ?, [$request->noms, $request->age, $request->id]");
    }
}
