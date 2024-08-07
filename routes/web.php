<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/service', function () {
    return view('service');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/obat', function () {
    return view('obat');
});
Route::get('/alkes', function () {
    return view('alkes');
});