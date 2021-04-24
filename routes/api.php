<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodosController;

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

Route::apiResource('/todo', TodosController::class);
Route::get('/todo', [TodosController::class, 'get']);
Route::post('/todo', [TodosController::class, 'post']);
Route::delete('/todo/{todo}', [TodosController::class, 'deleteTodo']);
Route::put('/todo/{todo}', [TodosController::class, 'put']);
//deleteとpatchも追加