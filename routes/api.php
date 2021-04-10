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

Route::get('/todo', [TodosController::class, 'get']);
Route::post('/todo', [TodosController::class, 'addTodos']);
Route::delete('/todo', [TodosController::class, 'delete']);
Route::patch(['/todo', TodosController::class, 'patch']);
//deleteとpatchも追加