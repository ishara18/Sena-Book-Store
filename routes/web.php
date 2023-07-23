<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\viewcontroller;
use App\Http\Controllers\databasecontroller;
use App\Http\Controllers\bookcontroller;


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


Route::get('/', [viewcontroller::class, 'homeview']);
Route::get('/books', [viewcontroller::class, 'booksview']);
Route::get('/author', [viewcontroller::class, 'authorview']);
Route::get('/offers', [viewcontroller::class, 'offersview']);
Route::get('/aboutus', [viewcontroller::class, 'aboutusview']);
Route::get('/contactus', [viewcontroller::class, 'contactusview']);
Route::get('/dashboard', [databasecontroller::class, 'dashboard']);
Route::get('/bookedit', [bookcontroller::class, 'bookedit']);


Route::get('/accesspage', [viewcontroller::class, 'registerloginview']);

Route::get('/createnewaccount', [viewcontroller::class, 'createnewaccountview']);

Route::get('/forgotpassword', [viewcontroller::class, 'forgotpasswordview']);

Route::post('login', [databasecontroller::class, 'login']);

Route::post('createnewuser', [databasecontroller::class, 'createuser']);

Route::post('addbook', [bookcontroller::class, 'addbook']);
Route::get('/bookupdate/{id}', [bookcontroller::class, 'bookupdate']);
Route::get('/bookdelete/{id}', [bookcontroller::class, 'bookdelete']);







