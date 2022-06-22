<?php

use App\Http\Controllers\HomeController;
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



Route::get('/', [HomeController::class, 'index'])->name('app_home');
Route::get('/posts/{id}', [HomeController::class, 'show'])->whereNumber('id')->name('app_post');
Route::get('/delete/{id}', [HomeController::class, 'delete'])->name('delete_post');
Route::get('/contact', [HomeController::class, 'contact'])->name('app_contact');
Route::get('/posts/create', [HomeController::class, 'create'])->name('post_create');
Route::post('/posts/create', [HomeController::class, 'store'])->name('post_store');
