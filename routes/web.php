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

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/forgot_password', function () {
    return view('forgot_password');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/professors', 'ProfessorsController@index');
Route::get('/professors/create', 'ProfessorsController@create');
Route::get('/professors/edit', 'ProfessorsController@edit');
Route::get('/professors/delete', 'ProfessorsController@delete');

Route::get('/students', 'StudentsController@index');
Route::get('/students/create', 'StudentsController@create');
Route::get('/students/edit', 'StudentsController@edit');
Route::get('/students/delete', 'StudentsController@delete');

Route::get('/departments', 'DepartmentsController@index');
Route::post('/departments', 'DepartmentsController@store');
Route::get('/departments/create', 'DepartmentsController@create');
Route::get('/departments/edit', 'DepartmentsController@edit');
Route::get('/departments/delete', 'DepartmentsController@delete');

Route::get('/classes', 'ClassesController@index');
Route::post('/classes', 'ClassesController@store');
Route::get('/classes/create', 'ClassesController@create');
Route::get('/classes/edit', 'ClassesController@edit');
Route::get('/classes/delete', 'ClassesController@delete');