<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Auth::routes();

Route::get('/',[BooksController::class,'get_books']
)->name('home');



Route::get('/home',[BooksController::class,'get_books']
)->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');


Route::get('/admin', function () {
    return view('admin');
})->name('admin');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
