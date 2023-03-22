<?php
use App\Models\category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\GroupsController;
use App\Http\Controllers\Auth\ProfileController;
use App\Http\Controllers\FavorisController;
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
)->name('admin')->middleware('auth');

Route::get('/groupsAdmin',[groupsController::class,'get_groupsA']
)->name('groupsAdmin');

Route::get('/showUsers',[groupsController::class,'get_users']
)->name('showUsers');

Route::get('/about', function () {
    return view('about');
})->name('about');



Route::get('/groups', [GroupsController::class,'get_groups']
)->name('groups');


Route::get('/joinGroup', [GroupsController::class,'join_group']
)->name('joinGroup');




Route::post('/add_group', [GroupsController::class,'add_group']
)->name('add_group')->middleware('auth');



Route::post('/addFavorite', [FavorisController::class,'add']
)->name('addFavorite')->middleware('auth');



Route::post('/insert_book', [BooksController::class,'insert']
)->name('insert_book')->middleware('auth');



Route::put('/update_book/{book}', [BooksController::class,'update']
)->name('update_book');

Route::get('/show', [BooksController::class,'show']
)->name('show_book');


Route::get('/add_book', function () {
    $category = category::all();
    return view('add_book',[
        'categories'=> $category
    ]);
})->name('add_book')->middleware('auth');


Route::get('/profile', function () {
    return view('profile');
})->name('profile');



Route::get('/newGroup', function () {
    return view('addGroups');
})->name('newGroup')->middleware('auth');




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

