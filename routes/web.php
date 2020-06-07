<?php
use App\Project;
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
    $projects = Project::all();
    return view('main', compact('projects'));
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
Route::get('/radio', 'pagesController@radio')->name('radio');
Route::get('/community', 'pagesController@community')->name('community');
Route::get('/podcast', 'pagesController@podcast')->name('podcast');
Route::get('/stripe', 'pagesController@stripe')->name('stripe');
Route::post('/charge', 'pagesController@charge')->name('charge');

// backend routes

Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
Route::get('/project', 'AdminController@project')->name('project');
Route::post('/new_proj', 'AdminController@new_proj')->name('new_proj');
Route::get('/edit', 'AdminController@edit')->name('edit');
Route::post('/update', 'AdminController@update')->name('update');
Route::post('/delete/{id}', 'AdminController@delete')->name('delete');
Route::post('/proposal', 'AdminController@proposal')->name('proposal');
Route::get('/plans', 'AdminController@plans')->name('plans');
Route::post('/new_plan', 'AdminController@new_plan')->name('new_plan');
Route::get('/edit_plan', 'AdminController@edit_plan')->name('edit_plan');
Route::post('/update_plan', 'AdminController@update_plan')->name('update_plan');
Route::post('/delete_plan/{id}', 'AdminController@delete_plan')->name('delete_plan');

