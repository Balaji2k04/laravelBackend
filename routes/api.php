<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Simple;
use App\Http\Controllers\StudentController;

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

// Route::apiResource('/student', StudentController::class);
// Route::get('/data', [Simple::class, 'index']);

// Route::get('/va', function () {
//     return view('welcome');
// });
Route::post('product/create', [ProductsController::class, 'create']);
Route::get('product/list', [ProductsController::class, 'index']);
Route::put('product/update/{id}', [ProductsController::class, 'edit']);
Route::delete('product/delete/{id}', [ProductsController::class, 'delete']);

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
