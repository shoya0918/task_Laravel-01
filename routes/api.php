<?php

use App\Http\Controllers\RemotePostController;
use Illuminate\Support\Facades\Route;

Route::post('/create-posts', [RemotePostController::class, 'store']);