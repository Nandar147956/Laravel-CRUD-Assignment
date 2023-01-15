<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

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

Route::get('show-employee',[Controller::class,'showEmployee']);

Route::get('insert-employee',[Controller::class,'insertEmployee'])->name('createEmployee');

Route::get('store-employee',[Controller::class,'storeEmployee']);

Route::get('edit-employee/{id}',[Controller::class,'editEmployee'])->name('editEmployee');

Route::post('update/{id}',[Controller::class,'updateEmployee'])->name('update');

Route::get('delete/{id}',[Controller::class,'deleteEmployee'])->name('delete');
