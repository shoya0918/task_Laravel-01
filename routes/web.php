<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/index', [PostsController::class, 'index'])->name('index');
    Route::get('/create', [PostsController::class, 'showCreate'])->name('show.create');
    Route::post('/create', [PostsController::class, 'storePost'])->name('store.post');
    Route::get('/edit/{id}', [PostsController::class, 'showEdit'])->name('show.edit');
    Route::post('/edit/{id}', [PostsController::class, 'registPost'])->name('regist.post');
    Route::post('/delete/{id}', [PostsController::class, 'deletePost'])->name('delete');


    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});

require __DIR__.'/auth.php';
