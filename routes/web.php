<?php

use App\Http\Controllers\PostsController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/index',[App\Http\Controllers\PostsController::class, 'index'])->name('index');
Route::get('/create', [App\Http\Controllers\PostsController::class, 'showCreate'])->name('show.create');
Route::post('/create', [App\Http\Controllers\PostsController::class, 'storePost'])->name('store.post');
Route::get('/edit/{id}', [App\Http\Controllers\PostsController::class, 'showEdit'])->name('show.edit');
Route::post('/edit/{id}', [App\Http\Controllers\PostsController::class, 'registPost'])->name('regist.post');
Route::delete('/delete/{id}', [App\Http\Controllers\PostsController::class, 'deletePost'])->name('delete');