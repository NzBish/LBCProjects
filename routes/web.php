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
    return view('welcome');
});
// Route::get('/projects', 'ProjectsController@index');
// Route::get('/projects/{project}', 'ProjectsController@show');



Route::resource('projects','ProjectsController');
Auth::routes(['register'=>false]);

Route::get('/dashboard', 'DashboardController@index');
Route::get('/projects/index/{year}', 'ProjectsController@list');