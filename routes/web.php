<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatFactController;


Route::get('/show/random-cat-fact', [CatFactController::class, 'showFact']);