<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PagesController; //must be placed at the top of routes


Route::get('/', [PagesController::class,'home']);


// Route::get('/', function () {
//     return view('welcome');
// });
