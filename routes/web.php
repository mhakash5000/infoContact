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

Route::get('/contact','contactController@contact')->name('contact');
Route::get('/insert','contactController@insert');
Route::post('/addData','contactController@AddData');
Route::get('deleteData/{id}','contactController@DeleteData');
Route::get('editData/{id}','contactController@EditData');
Route::post('updateData/{id}','contactController@UpdateData');
Route::get('viewData/{id}','contactController@ViewData');


