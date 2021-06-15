<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//Quiero usar el controladoe asi que lo importo, se importa con namespace/NombreClase
use App\Http\Controllers\ConsolasController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//La ruta puede ser get o post(get para obtener algo de la bd y post es para enviar a la base de datos)
Route::get("marcas/get", [ConsolasController::class, "getMarcas"]);
//Route::get("url", [ConsolasController::class, "metodo"]);