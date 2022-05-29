<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::post('/login_validation', [UserController::class, 'login_validation']);
Route::post('/submit_answers', [UserController::class, 'submit_answers']);
Route::post('/check_results', [UserController::class, 'check_results']);
Route::post('/logout', [UserController::class, 'logout']);
