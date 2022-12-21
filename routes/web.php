<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\RegisterController;
use App\Providers\RouteServiceProvider;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Routing\Router;
use Symfony\Component\Routing\Annotation\Route as AnnotationRoute;
use Symfony\Component\Routing\Route as ComponentRoutingRoute;

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
// route author
Route::get('', [AuthorController::class, 'index'])->name('home');
Route::get('about', [AuthorController::class, 'about'])->name('about');
Route::get('list_author', [AuthorController::class, 'list_author'])->name('list_author');
Route::get('add_author', [AuthorController::class, 'add_author'])->name('add_author');
Route::post('add_author', [AuthorController::class, 'insert'])->name('insert');
Route::get('update_author/{id}', [AuthorController::class, 'update_author'])->name('update_author');
Route::post('update_author/{id}', [AuthorController::class, 'update'])->name('update');
Route::get('delete_author/{id}', [AuthorController::class, 'delete'])->name('delete');

//route book
Route::get('list_book', [BookController::class, 'list_book'])->name('list_book');
Route::get('add_book', [BookController::class, 'add_book'])->name('add_book');
Route::post('add_book', [BookController::class, 'create'])->name('create');
Route::get('delete_book/{id}', [BookController::class, 'delete'])->name('delete_book');
Route::get('update_book/{id}', [BookController::class, 'update_book'])->name('update_book');
Route::post('update_book/{id}', [BookController::class, 'edit'])->name('edit');

//route register
Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register', [RegisterController::class, 'postRegister']);
Route::get('login', [RegisterController::class, 'login'])->name('login');
Route::post('login', [RegisterController::class, 'PostLogin']);
Route::get('logout', [RegisterController::class, 'logout'])->name('logout');

