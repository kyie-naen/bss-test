<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Route::get('/', 'BookController@show');
Route::get('/', [BookController::class, 'show']);
Route::get('/add-book', [BookController::class, 'addBook']);
Route::post('/process-add-book', [BookController::class, 'processAddBook']);
Route::get('/edit-book/{id}', [BookController::class, 'editBook']);
Route::post('/process-edit-book/{id}', [BookController::class, 'processEditBook']);
Route::delete('/remove-book/{id}', [BookController::class, 'removeBook']);
