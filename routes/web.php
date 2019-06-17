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

Route::get('/admin', 'HomeController@admin');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/professors', 'ProfessorsController@index');
Route::get('/professors/create', 'ProfessorsController@create');
Route::get('/professors/edit', 'ProfessorsController@edit');
Route::get('/professors/delete/{professor}', 'ProfessorsController@destroy');

Route::get('/students', 'StudentsController@index');
Route::get('/students/create', 'StudentsController@create');
Route::get('/students/{student}', 'StudentsController@show');
Route::get('/students/edit', 'StudentsController@edit');
Route::get('/students/delete/{student}', 'StudentsController@destroy');

Route::get('/departments', 'DepartmentsController@index');
Route::post('/departments', 'DepartmentsController@store');
Route::get('/departments/create', 'DepartmentsController@create');
Route::get('/departments/edit', 'DepartmentsController@edit');
Route::get('/departments/delete/{department}', 'DepartmentsController@destroy');

Route::get('/classes', 'ClassesController@index');
Route::get('/classes/mine', 'ClassesController@mine');
Route::post('/classes', 'ClassesController@store');
Route::get('/classes/create', 'ClassesController@create');
Route::get('/classes/edit', 'ClassesController@edit');
Route::get('/classes/delete/{class}', 'ClassesController@destroy');

Route::get('/grades/class/{class}', 'GradesController@classgrades');
Route::get('/grades/mine', 'GradesController@usergrades');
Route::post('/grades/save', 'GradesController@change');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');