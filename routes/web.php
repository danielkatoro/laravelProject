<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/toto', function () {
    return view('toto');
});

Route::name('etudiant')->get('/etudiant', function () {
    $etudiants = DB::select("SELECT * FROM etudiants");
    return view('etudiant',compact('etudiants'));
});


Route::name('store_etudiant')->post('/store_etudiant', function (Request $request) {
    DB::table('etudiants')->insert([
        'noms' => $request->noms,
        'age' => $request->age
    ]);
});