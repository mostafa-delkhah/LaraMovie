<?php

use Illuminate\Support\Facades\Route;



Route::view('/', 'home.index');
Route::view('/movie', 'home.show');
