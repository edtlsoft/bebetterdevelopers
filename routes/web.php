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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $profesionales = \App\Models\Profesional::with(['profesion', 'municipio', 'vehiculo'])->get();

    return Inertia\Inertia::render('Dashboard', compact('profesionales'));
})->name('dashboard');

Route::delete('/profesionales/{profesional}', function(\App\Models\Profesional $profesional){
    $profesional->vehiculo()->delete();
    
    return $profesional->delete();
});
