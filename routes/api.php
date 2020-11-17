<?php

use App\Http\Controllers\API\LocationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('provinces', [LocationController::class, 'provinces'])->name('api-provinces');
Route::get('province/{id}', [LocationController::class, 'provincesData'])->name('api-provinces-data');
Route::get('cities/{provinces_id}', [LocationController::class, 'cities'])->name('api-cities');
Route::get('city/{id}', [LocationController::class, 'cityData'])->name('api-city-data');
