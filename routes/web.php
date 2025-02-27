<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\viewsController;

Route::get('/decamiones', [viewsController::class, 'viewIndexprincipal']);
