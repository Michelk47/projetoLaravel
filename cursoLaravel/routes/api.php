<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdressController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{id}', [UserController::class, 'findOne']);
Route::post('users', [UserController::class, 'add']);



Route::get('/addresses', [AdressController::class, 'index']);
Route::get('/addresses/{id}', [AdressController::class, 'findOne']);
Route::post('addresses', [AdressController::class, 'add']);



