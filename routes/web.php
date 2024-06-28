<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index']);
Route::get('/blogs', [BlogController::class, 'show']);
Route::get('/blog/{id}', function (string $id) {
    // return 'User' . $id;
    return App::call('App\Http\Controllers\BlogController@show2' , ['id' => $id]);   
});
Route::view('/contact','contact', ['title' => 'Contact', 'email' => 'corpsesbag@gmail.com', 'username' => 'aexion', 'name' => 'Linggar']);