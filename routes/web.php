<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatFactController;


Route::get('/fakta-kucing', [CatFactController::class, 'showFact']);