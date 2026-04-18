<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PancinganController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('pancingans', PancinganController::class);
