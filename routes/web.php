<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\SessionController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

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


Route::get('/', function() {
    return view('posts', [
        'posts' => Post::all()
    ]);
});

Route::get('posts/{post:slug}', function(Post $post){
    return view('post', [
        'post' => $post
    ]);
});

Route::get('/register', [RegisterController::class, 'register'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('/login', [SessionController::class, 'create'])->middleware('guest');
Route::post('/login', [SessionController::class, 'store'])->middleware('guest');

Route::post('/logout', [SessionController::class, 'destroy'])->middleware('auth');

Route::get('admin/posts/create', [PostController::class, 'create'])->middleware('admin');
Route::post('admin/posts/create', [PostController::class, 'store'])->middleware('admin');