<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;


Route::prefix('api')->group(function(){

    // GET methods
    Route::get('/category', [CategoryController::class, 'index']);
    Route::get('/category/{id}', [CategoryController::class, 'show']);
    Route::get('/item', [ItemController::class, 'index']);
    Route::get('/item/{id}', [ItemController::class, 'show']);

    // POST methods
    Route::post('/category', [CategoryController::class, 'store']);
    Route::post('/item', [ItemController::class, 'store']);

    // PUT methods
    Route::put('/category/{id}', [CategoryController::class, 'update']);
    Route::put('/item/{id}', [ItemController::class, 'update']);

    // DELETE methods
    Route::delete('/category/{id}', [CategoryController::class, 'destroy']);
    Route::delete('/item/{id}', [ItemController::class, 'destroy']);

    Route::get('/items-with-category', [ItemController::class, 'indexWithCategory']);
});