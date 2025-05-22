<?php

use App\Http\Controllers\LlamaController;
use App\Http\Controllers\Api\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/llama', [LlamaController::class, 'ask']);

Route::apiResource('products', ProductController::class);

