<?php
use App\Models\category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\GroupsController;
use App\Models\books;

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


Route::get('/admin',[BooksController::class,'get_booksss']
)->name('admin');



Route::get('/about', function () {
    return view('about');
})->name('about');



Route::get('/groups', [GroupsController::class,'get_groups']
)->name('groups');




Route::post('/insert_book', [BooksController::class,'insert']
)->name('insert_book');



Route::put('/update_book/{book}', [BooksController::class,'update']
)->name('update_book');

Route::get('/show', [BooksController::class,'show']
)->name('show_book');


Route::get('/add_book', function () {
    $category = category::all();
    return view('add_book',[
        'categories'=> $category
    ]);
})->name('add_book');


Route::get('/profile', function () {
    return view('profile');
})->name('profile');


Route::get('/viewbooks', function () {
    return view('viewBook');
})->name('viewBook');


Route::get('books/{book}/edit', [BooksController::class, 'edit'])->name('update');

// Route::resource('/home','categoryController');

Route::get('books/{book}/destroy', [BooksController::class, 'destroy']);



// Route::get('/update_bookk', function () {
//     return view('update');
// })->name('update_bookk');




Route::get('/contact', function () {
    return view('contact');
})->name('contact');



// Route::get('update_delete',[BooksController::class ,'updateORdelete']);

