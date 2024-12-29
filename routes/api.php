<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TabunganController;
use App\Http\Controllers\PinjamanController;
use App\Http\Controllers\DepositoController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('webhook/transaksi-tabungan', [TabunganController::class, 'handleWebhook']);
Route::post('webhook/transaksi-pinjaman', [PinjamanController::class, 'handleWebhook']);
Route::post('webhook/deposito', [DepositoController::class, 'handleWebhook']);

Route::get('test', function() {
    return response()->json([
        'status' => 'success',
        'message' => 'Webhook endpoint siap digunakan',
        'timestamp' => now()
    ]);
});

