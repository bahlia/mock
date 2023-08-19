<?php

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
    return redirect('login');
});

Auth::routes();

Route::get('/home', function(){
    return redirect("panel");
})->name('home');

Route::post('/categoriaMach', [App\Http\Controllers\HomeController::class, 'categoriaMach'])->name('Categoria');

Route::get('/panel',function(){
    return view("panel");
})->name("panel");

Route::get('/match/{id}',function($id){
    return view('match',[
        "id" => $id
    ]);
    
})->name('match');

Route::get('/licitaciones',function(){
    return view("licitaciones");
})->name('licitaciones');

Route::get('/licitaciones/crear',function(){
    return view("licitaciones-crear");
})->name('crear');