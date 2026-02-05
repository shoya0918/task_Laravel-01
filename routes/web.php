<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

Route::get('/index',[PostsController::class,'index']);
Route::get('/show', [PostsController::class,'show']);
