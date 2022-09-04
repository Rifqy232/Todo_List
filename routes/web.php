<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [TodoController::class, 'index']);

Route::post('/', [TodoController::class, 'addTodo']);

Route::get('/{id}/edit', [TodoController::class, 'editTodo']);
Route::put('/{id}', [TodoController::class, 'updateTodo']);

Route::delete('/{id}', [TodoController::class, 'destroy']);