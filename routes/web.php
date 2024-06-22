<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index']);
Route::get('/blog', [BlogController::class, 'show']);
Route::view('/contact','contact', ['title' => 'Contact', 'email' => 'corpsesbag@gmail.com', 'username' => 'aexion', 'name' => 'Linggar']);