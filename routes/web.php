<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\PersonneController;
use App\Models\Animal;
use App\Models\Customer;
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

Route::name('etudiant')->get('/etudiant', [EtudiantController::class,'acceuil']);


Route::name('store_etudiant')->post('/store_etudiant', [EtudiantController::class,'store'] );

Route::name('editEtudiant')->get('/etudiant/{id}', [EtudiantController::class,'edit']);

Route::name('updateEtudiant')->post('/updateEtudiant', [EtudiantController::class,'update']);

Route::name('animal')->get('/animal', function(){
    return view('add_annimal');
});
Route::name('store_animal')->post('/store_animal', function(Request $request){
    Animal::create([
        'nom' => $request->nom,
        'espece' => $request->espece
    ]);
    return 'okey';
} );

Route::name('index')->get('/add_personne', [PersonneController::class,'index']);
Route::name('personne.add')->post('/personne.add', [PersonneController::class,'store'] );

Route::name('customer.index')->get('/index_customer', [CustomerController::class,'index']);
Route::name('customer.store')->post('/store_customert', [CustomerController::class,'store'] );
Route::name('customer.edit')->get('/customer_edit/{id}', [CustomerController::class,'edit']);
Route::name('customer.update')->post('/customer_update', [CustomerController::class,'update']);
Route::name('cucstomer.destroy')->get('/customer_destroy/{id}', [CustomerController::class, 'destroy']);