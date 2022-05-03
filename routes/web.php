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
/*         url | Ruta del controlador                  | Metodo  | Opcional (darle un nombre para ser llamado desde route)  */
Route::get('/', 'App\Http\Controllers\WelcomeController@welcome')->name('welcome');

//Ruta(la url que quieras que aparezca) | Direccion completa  |Metodo  
/* Route::get('/saludo1', 'App\Http\Controllers\SaludoController@saludo'); */

Auth::routes();

//       Ruta que llama al controlador 
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
