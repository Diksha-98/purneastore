<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BusinessController;



Route::get('/',[BusinessController::class,"index"])->name('homepage');
Route::get('/show/{slug}',[BusinessController::class,"show"])->name('show');
Route::get('/filter/{id}',[BusinessController::class,"filter"])->name('filter');
Route::get("/single/{itemId}/bitem/{bitemId}",[BusinessController::class,"single"])->name("single");
Route::match(["get","post"],'/insertbiz',[BusinessController::class,"insertbiz"])->name('insertbiz');
Route::match(["get","post"],'/insertbizitem',[BusinessController::class,"insertbizitem"])->name('insertbizitem');
Route::match(["get","post"],'/insertreview',[BusinessController::class,"insertreview"])->name('insertreview');
Route::match(["post","get"],"/register",[BusinessController::class,"register"])->name("register");
Route::match(["post","get"],"/login",[BusinessController::class,"login"])->name("login");
Route::get("/logout",[BusinessController::class,"logout"])->name("logout");

Route::get('/like/{id}',[BusinessController::class,"like"])->name('like');
Route::get('/dislike/{id}',[BusinessController::class,"dislike"])->name('dislike');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
