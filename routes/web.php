<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
| En espa hoja asignamos como se visualiza las rutas de nuestras
| paginas, permitiendo una mayor claridad en las URL.
*/

Route::get('/', function () {
    return view('auth.login');
});

//Ya no es necesario utilizar este tipo de rutas, a menos que no se tenga un controlador de los archivos.
/* Route::get('/employe', function () {
    return view('employe.index');//El punto nos permite acceder al contenido de la carpeta.
});

Route::get('/employe/create', [EmployeController::class,'create']); */

Route::resource('employe', EmployeController::class)->middleware('auth');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes(['register' => false, 'reset' => false]);
Route::get('/home', [EmployeController::class, 'index'])->name('home');


Route::middleware(['middleware'=> 'auth'])->group(function () {
    Route::get('/', [EmployeController::class, 'index'])->name('home');
});