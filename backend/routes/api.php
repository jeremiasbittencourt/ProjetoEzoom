<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\KpiController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Rota de teste para verificar se a API está funcionando
Route::get('/test', function () {
    return response()->json(['message' => 'API funcionando!']);
});


Route::middleware('auth:sanctum')->group(function () {
    Route::get('/kpis', [KpiController::class, 'index']);
});

