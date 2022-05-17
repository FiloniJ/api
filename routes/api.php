<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\DiaryController;
use App\Http\Controllers\Api\TasksController;
use App\Http\Controllers\Api\IncomeController;
use App\Http\Controllers\Api\ExpensesController;
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

Route::resource('/diary', DiaryController::class);
Route::resource('/tasks', TasksController::class);
Route::resource('/budget/income', IncomeController::class);
Route::resource('/budget/expenses', ExpensesController::class);