<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthenticationController;

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

    Route::post('/auth/register', [AuthenticationController::class, 'createUser']);
    Route::post('/auth/login', [AuthenticationController::class, 'loginUser']);
    Route::get('/', function (Request $request) {
        return response()->json(['alo']);
    });

Route::post('/', function (Request $request) {
    return response()->json(['alo']);
});
