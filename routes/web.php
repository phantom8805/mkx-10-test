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
Route::get('/', 'CategoryController@showCategories');
Route::get('/category/{id}', 'CategoryController@showSubcategoriesGroup');
Route::get('/category/{id}/sub-category/{subId}', 'CategoryController@showSubcategories');
Route::get('/category/{id}/sub-category/{subId}/diagnoses-category/{diagnosesCat}', 'DiagnosesController@showDiagnosesGroup');

Route::get('/search', 'DiagnosesController@search');