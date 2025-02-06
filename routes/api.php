<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostTwoController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductPriceController;
use App\Http\Controllers\ProductPriceControllerm;
use App\Http\Controllers\TagController;
use App\Http\Controllers\TaggableController;
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
Route::apiResource('image',ImageController::class);
Route::apiResource('comment',CommentController::class);
Route::apiResource('product-price',ProductPriceController::class);
Route::apiResource('taggable',TaggableController::class);
Route::apiResource('tag',TagController::class);
