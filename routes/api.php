<?php

use App\Http\Controllers\RemotePostController;
use Illuminate\Support\Facades\Route;

Route::post('/posts', [RemotePostController::class, 'store']);