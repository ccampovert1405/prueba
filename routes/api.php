<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\UsersBackofficeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('/login', [LoginController::class,'login']);

Route::group([],function() {
    Route::post('/users-backoffice', [UsersBackofficeController::class, 'store']);
    Route::get('/users-backoffice/{user}', [UsersBackofficeController::class, 'getById']);
    Route::put('/users-backoffice/{user}', [UsersController::class, 'update']);
    Route::delete('/users-backoffice/{user}', [UsersController::class, 'destroy']);
});

Route::group([],function() {
    Route::post('/department', [DepartmentController::class, 'store']);
    Route::get('/department/{id}', [DepartmentController::class, 'getById']);
    Route::put('/department/{id}', [DepartmentController::class, 'update']);
    Route::delete('/department/{id}', [DepartmentController::class, 'destroy']);
});

Route::group([],function() {
    Route::post('positions', [PositionController::class, 'store']);
    Route::get('/position/{id}', [PositionController::class, 'getById']);
    Route::put('/position/{id}', [PositionController::class, 'update']);
    Route::delete('/position/{id}', [PositionController::class, 'destroy']);
});

