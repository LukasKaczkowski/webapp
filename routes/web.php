<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
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


Route::get('/users',[UserController::class, 'index'])
    ->name('users.index');
Route::get('/users/{username}',[UserController::class, 'show'])
    ->name('users.show');

Route::get('/posts',[PostController::class, 'index'])
    ->name('posts.index');
Route::get('/posts/create',[PostController::class, 'create'])
    ->middleware(['auth'])->name('posts.create'); 
Route::post('/posts',[PostController::class, 'store'])
    ->middleware(['auth'])->name('posts.store'); 
Route::get('/posts/{post}',[PostController::class, 'show'])
    ->middleware(['auth'])->name('posts.show');
Route::get('/posts/{post}/edit',[PostController::class,'edit'])
    ->middleware(['auth'])->name('posts.edit');
Route::post('/posts/{post}',[PostController::class,'update'])
    ->middleware(['auth'])->name('posts.update');
Route::delete('/posts/{post}',[PostController::class,'destroy'])
    ->middleware(['auth'])->name('posts.destroy');

Route::post('/comments',[CommentController::class,'store'])
    ->middleware(['auth'])->name('comments.store');
Route::delete('/comments/{comment}',[CommentController::class,'destroy'])
    ->middleware(['auth'])->name('comments.destroy');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
