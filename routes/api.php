<?php
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FamiliaController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\ProductoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::post('clientes', [ClienteController::class, 'store']);
Route::post('familiaproducto', [FamiliaController::class, 'insertarFamilia']);
Route::post('marcaproducto', [MarcaController::class, 'insertarMarca']);
Route::post('producto', [ProductoController::class,'insertarProducto']);
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
