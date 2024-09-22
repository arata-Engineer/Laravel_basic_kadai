<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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


Route::get('/posts', [PostController::class, 'posts.index']);
//Route::get('/posts/create', [PostController::class, 'posts.create']);
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->middleware(['auth','verfied'])->name('posts.store');
Route::get('/posts/{id}', [PostController::class, 'posts.show']);