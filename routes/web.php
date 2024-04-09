<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

//la rotta ha il controller e il metodo che in questo caso è create
Route::get('/', [MovieController::class, 'create']
)->name('movie.create');
//ricorda la namedroute rispetta la regola argomento.metodo
Route::post('/movie/store', [MovieController::class, 'store'])->name('movie.store');