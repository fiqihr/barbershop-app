<?php

// use App\Http\Controllers\AuthController;
use App\Http\Controllers\Api\V1\AuthController;
use App\Http\Controllers\Api\V1\UserController;
use App\Http\Controllers\Api\V1\PelayananController;
use App\Http\Controllers\Api\V1\TransaksiController;
use App\Http\Controllers\Api\V1\JamController;
use App\Http\Controllers\Api\V1\BarbermanController;
use App\Http\Controllers\AuthController\Api\V1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;

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

// 'middleware' => 'auth:sanctum'

Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers\Api\V1',  ], function () {
    Route::apiResource('pelayanan', PelayananController::class);
    Route::apiResource('user', UserController::class);
    Route::apiResource('barberman', BarbermanController::class);
    Route::apiResource('jam', JamController::class);
    Route::apiResource('transaksi', TransaksiController::class);
    Route::post('updateProfile/{id}', [UserController::class,'updateProfile']);
    Route::post('updateFotoProfile/{id}', [UserController::class,'updateFotoProfile']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::get('me', [AuthController::class, 'me']);
});


// Route::get('/getImage',[ImageController::class,'getImage']);
Route::get('image/{path}', [ImageController::class, 'getImage'])->where('path', '.*');
// Route::get('image/{filename}',[ImageController::class, 'image']);
Route::post('image', [ImageController::class, 'uploadImage']);

Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers\Api\V1'], function () {
    Route::post('register', [AuthController::class, 'register']);
    Route::post('login', [AuthController::class, 'login']);
});




// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });