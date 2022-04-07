<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthenticatorController;
use App\Http\Controllers\API\ApplianceController;
use App\Http\Controllers\API\BrandController;

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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::post('register', [AuthenticatorController::class, 'register']);
Route::post('login', [AuthenticatorController::class, 'login']);

Route::resource('appliances', ApplianceController::class);
Route::resource('brands', BrandController::class);

Route::middleware('auth:api')->group(function () {

});
