<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\PostTwoController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::apiResource('user',UserController::class);
Route::apiResource('post',PostController::class);
Route::apiResource('product',ProductController::class);
Route::apiResource('post-two',PostTwoController::class);