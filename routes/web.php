<?php
use App\Project;
use App\Contact;
use App\Video;
use App\Slider1;
use App\Slider2;
use App\Slider3;
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

// Route::get('/', function () {
//     $projects = Project::all();
//     $contact = Contact::find(1);
//     $video = Video::find(1);
//     $slider1 = Slider1::find(1);
//     $slider2 = Slider2::find(1);
//     $slider3 = Slider3::find(1);
//     return view('main', compact('projects', 'contact', 'video', 'slider1', 'slider2', 'slider3'));
// });

// Route::get('/main', function () {
//     return view('welcome');
// });
Route::get('/about', 'pagesController@about')->name('about');
Route::get('/', 'pagesController@main')->name('/');
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
Route::get('/stream', 'pagesController@stream')->name('stream');

// backend routes

Route::group(['prefix'=>'acrm','middleware' => 'auth'], function() {
    Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
    Route::get('/project', 'AdminController@project')->name('project');
    Route::post('/new_proj', 'AdminController@new_proj')->name('new_proj');
    Route::get('/edit', 'AdminController@edit')->name('edit');
    Route::post('/update', 'AdminController@update')->name('update');
    Route::post('/delete/{id}', 'AdminController@delete')->name('delete');
    Route::get('/plans', 'AdminController@plans')->name('plans');
Route::post('/new_plan', 'AdminController@new_plan')->name('new_plan');
Route::get('/edit_plan', 'AdminController@edit_plan')->name('edit_plan');
Route::post('/update_plan', 'AdminController@update_plan')->name('update_plan');
Route::post('/delete_plan/{id}', 'AdminController@delete_plan')->name('delete_plan');
Route::get('/video', 'AdminController@video')->name('video');
Route::post('/new_video', 'AdminController@new_video')->name('new_video');
Route::get('/user', 'AdminController@user')->name('user');
Route::post('/new_user', 'AdminController@new_user')->name('new_user');
Route::post('/delete_user/{id}', 'AdminController@delete_user')->name('delete_user');
Route::get('/contact_details', 'AdminController@contact_details')->name('contact_details');
Route::post('/update_contact', 'AdminController@update_contact')->name('update_contact');
Route::get('/edit_contact', 'AdminController@edit_contact')->name('edit_contact');

Route::get('/slider', 'AdminController@slider')->name('slider');
Route::post('/add_slider', 'AdminController@add_slider')->name('add_slider');
Route::post('/add_slider2', 'AdminController@add_slider2')->name('add_slider2');
Route::post('/add_slider3', 'AdminController@add_slider3')->name('add_slider3');
Route::post('/edit_slider', 'AdminController@edit_slider')->name('edit_slider');
Route::get('/delete_slider', 'AdminController@delete_slider')->name('delete_slider');

});

Route::post('/proposal', 'AdminController@proposal')->name('proposal');

Route::post('/call', 'AdminController@call')->name('call');
Route::post('/prayer', 'AdminController@prayer')->name('prayer');
// Route::post('payment', 'PayPalController@payment')->name('payment');
Route::post('/new_partnership', 'AdminController@new_partnership')->name('new_partnership');

// Route::get('cancel', 'PayPalController@cancel')->name('payment.cancel');

// Route::get('payment/success', 'PayPalController@success')->name('payment.success');

Route::post('/payment', ['as' => 'payment', 'uses' => 'PayPalController@payWithpaypal']);
Route::get('/payment/status',['as' => 'status', 'uses' => 'PayPalController@getPaymentStatus']);


Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
  ]);

Route::get('/home', 'HomeController@index')->name('home');

