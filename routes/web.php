<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/world', function () {
    return view('admin.world.index');
})->name('world');

Route::get('/video', function () {
    return view('admin.videonoticia.index');
})->name('video');

Route::get('/fashion', function () {
    return view('admin.fashion.index');
})->name('fashion');

Route::get('/contact', function () {
    return view('admin.contacto.index');
})->name('contacto');
/* ------------*/
Route::get('/travel', function () {
    return view('admin.travel.index');
})->name('travel');
Route::get('/tech', function () {
    return view('admin.tech.index');
})->name('tech');
Route::get('/sport', function () {
    return view('admin.sport.index');
})->name('sport');
Route::get('/food', function () {
    return view('admin.food.index');
})->name('food');

