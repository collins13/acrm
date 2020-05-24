<?php

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
    return view('main');
});

Route::get('/main', function () {
    return view('welcome');
});
Route::get('/about', 'pagesController@about')->name('about');
Route::get('/services', 'pagesController@services')->name('services');
Route::get('/projects', 'pagesController@projects')->name('projects');
Route::get('/partnership', 'pagesController@partnership')->name('partnership');
Route::get('/donate', 'pagesController@donate')->name('donate');
Route::get('/contact', 'pagesController@contact')->name('contact');
// Route::get('/about', 'pagesController@about')->name('about');
// Route::get('/about', 'pagesController@about')->name('about');

// Route::get('/contact', function () {
//     return view('pages.contact');
// });
// Route::get('/donate', function () {
//     return view('pages.donate');
// });
// Route::get('/blog', function () {
//     return view('pages.blog');
// });
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', function () {
//     return view('welcome');
// });

