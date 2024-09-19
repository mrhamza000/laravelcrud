<?php

use App\Http\Controllers\productcontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/create',[productcontroller::class,'create'])->name('create');
Route::post('/',[productcontroller::class,'store'])->name('store');