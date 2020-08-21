<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/blog', function () {
    return view('blog'); 
})->name('blog');

Route::get('/contact/all', 'ContactController@allData' )->name('contact-data');
Route::post('/contact/submit', 'ContactController@submit' )->name('contact-form');
// Route::post('/pushkin/shop/public/contact/submit', function () {
//     dd(Request::all());
// })->name('contact-form');
