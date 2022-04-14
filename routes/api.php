<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProizvodjacController;
use App\Http\Controllers\VlasnikController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('proizvodjac', [ProizvodjacController::class, 'index']);
Route::get('proizvodjac/{proizvodjac}', [ProizvodjacController::class, 'show']);

Route::get('vlasnik', [VlasnikController::class, 'index']);
Route::get('vlasnik/{vlasnik}', [VlasnikController::class, 'show']);

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::delete('proizvodjac/{proizvodjac}', [ProizvodjacController::class, 'destroy']);
    Route::post('vlasnik', [VlasnikController::class, 'store']);
    Route::delete('vlasnik/{vlasnik}', [VlasnikController::class, 'destroy']);
    Route::post('logout', [AuthController::class, 'logout']);
});
