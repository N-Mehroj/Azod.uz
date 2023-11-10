<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DiscussionController;


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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post("/user",[UserController::class,'getData']);
Route::get("/userData",[UserController::class,'getUser']);
Route::get("/blogs",[BlogController::class,'getBlogData']);
Route::post("/blogShow",[BlogController::class,'show']);
Route::post("/comment",[DiscussionController::class,'create']);
Route::get("/commentGet",[DiscussionController::class,'show']);
