<?php

use Illuminate\Http\Request;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('home');
}) -> name('home');

Route::get('/about', function () {
    return view('about');
}) -> name('about');

Route::get('/contact', function () {
    return view('contact');
}) -> name('contact');

Route::get('contact/all/{id}',
    'App\Http\Controllers\ContactController@showMessage')
    -> name('contactMessage');

Route::get('contact/all/{id}/update',
    'App\Http\Controllers\ContactController@updateMessage')
    -> name('contactUpdate');

Route::post('contact/all/{id}/update',
    'App\Http\Controllers\ContactController@updateMessageSubmit')
    -> name('contactUpdateSubmit');

Route::get('contact/all/{id}/delete',
    'App\Http\Controllers\ContactController@deleteMessage')
    -> name('contactDelete');

Route::get('contact/all', 'App\Http\Controllers\ContactController@allData') -> name('contactData');
Route::post('contact/submit', 'App\Http\Controllers\ContactController@submit') -> name('contactForm');

// Route::post('contact/submit', 'ContactController@submit') -> name('contactForm');
