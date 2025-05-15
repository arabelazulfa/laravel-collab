<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LlamaController;
use App\Http\Controllers\WelcomeController;
use App\Models\Product;
use App\Http\Controllers\ProductController;




Route::get('/', [WelcomeController::class, 'index']);
Route::get('/products', [ProductController::class, 'index']);

Route::get('/products/{id}', [ProductController::class, 'show']);

Route::get('/products/create', [ProductController::class, 'create']);
Route::post('/products', [ProductController::class, 'store']);

Route::get('/product/{id}', [ProductController::Class, 'show'])->name('products.show');
Route::get('/products/{id}/edit',[ProductController::class, 'edit'])->name('products.edit');

Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

// Route::resource('products', ProductController::class);
// Route::delete('/products/{id}', [ProductController::class, 'destroy']);

//Llama Chatbot
Route::get('/chatbot', function(){
    return view('chatbot');
});
Route::post('/ask-llama', [LlamaController::class, 'ask']);

Route::get('/react', function () {
    return view('react');
});


// Route::get('/', function () {
    return view('welcome');
//  });

 