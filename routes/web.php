<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\emp;

Route::get('/',[emp::class,'show_emp']);
Route::view('add_emp',[emp::class,'add_emp']);
Route::view('add_emp','add_emp');
Route::view('edit_data','edit_data');
Route::post('save_data',[emp::class,'add_emp']);
Route::get('edit_data/{id}',[emp::class,'edit_data']);
Route::post('update_data',[emp::class,'update_data']);
Route::get('del/{id}',[emp::class,'del']);