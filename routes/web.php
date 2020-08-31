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

Route::get('/', function () {
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

Route::get('/contact/all/{id}/update', 'ContactController@updateMessage')->name('contact-update');
Route::get('/contact/all/{id}', 'ContactController@allData')->name('contact-data-one');
Route::get('/contact/all', 'ContactController@all')->name('contact-all');
Route::post('/contact/submit', 'ContactController@submit' )->name('contact-form');
// Route::post('/contact/submit', function () {
//     dd(Request::all());
// })->name('contact-form');
