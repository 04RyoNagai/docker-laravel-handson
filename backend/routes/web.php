<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/projects', [ProjectController::class, 'index']);
Route::get('/projects/new', [ProjectController::class, 'new']);
Route::post('/projects/new', [ProjectController::class, 'create']);
Route::get('/projects/{id}', [ProjectController::class, 'show']);
Route::get('/projects/{id}/edit', [ProjectController::class, 'edit']);
Route::post('/projects/{id}/edit', [ProjectController::class, 'save']);
