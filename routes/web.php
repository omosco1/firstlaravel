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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::view('Explore','Explore');
Route::view('about','about');
Route::get('contact','ContactFormController@create')->name('contact.create');
Route::post('contact','ContactFormController@store')->name('contact.store');
// Route::view('contact','contact');
// Route::get('courses', 'CoursesController@index');
// Route::get('courses/create','CoursesController@create');
// Route::post('courses','CoursesController@library');
// Route::get('courses/{course}','CoursesController@show');
// Route::get('courses/{course}/edit','CoursesController@edit');
// Route::patch('courses/{course}','CoursesController@update');
// Route::delete('courses/{course}','CoursesController@destroy');
Route::resource ('courses','CoursesController')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

