<?php
use App\Models\category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\GroupsController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\CategoryController;
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



Route::controller(BooksController::class)->group(function(){

    Route::get('/','get_books')->name('home');
    Route::get('/home','get_books')->name('home');
    Route::get('/admin','get_booksss')->name('admin')->middleware('auth');
    Route::post('/insert_book','insert')->name('insert_book')->middleware('auth');
    Route::put('/update_book/{book}','update')->name('update_book');
    Route::get('/show','show')->name('show_book');
    Route::get('books/{book}/edit', 'edit')->name('update');
    Route::get('books/{book}/destroy', 'destroy');
    Route::get('/books/{book}', 'show')->name('books');
});




Route::get('/groups/{id}',[groupsController::class,'get_group_byId']);

Route::controller(groupsController::class)->group(function(){

    Route::get('/groupsAdmin','get_groupsA')->name('groupsAdmin');
    Route::get('/showUsers','get_users')->name('showUsers');
    Route::get('/groups', 'get_groups')->name('groups');
    Route::delete('/deleteProfile/{id}', 'deleteProfile')->name('deleteProfile')->middleware('auth');
    Route::post('/add_group', 'add_group')->name('add_group')->middleware('auth');
    Route::get('groups/{group}/destroy',  'destroy');
   
});



Route::get('/categories',[CategoryController::class,'get_categories']
)->name('categories');


Route::get('/about', function () {
    return view('about');
})->name('about');



Route::get('/joinGroup/{id}', function($id){
    return view('joinGroup',['id'=>$id]);
} )->name('joinGroup')->middleware('auth');




Route::post('/add_comment', [CommentsController::class,'addComment']
)->name('addComment')->middleware('auth');

Route::get('/all_comment/{id}', [CommentsController::class,'getAllComments']
)->name('allComment')->middleware('auth');

Route::post('/add_category', [CategoryController::class,'add_category']
)->name('add_category');


Route::post('/addFavorite', [FavorisController::class,'add']
)->name('addFavorite')->middleware('auth');






Route::get('/add_book', function () {
    $category = category::all();
    return view('add_book',[
        'categories'=> $category
    ]);
})->name('add_book')->middleware('auth');

Route::get('/insertCategory', function () {
    return view('addCategory');
})->name('insertCategory')->middleware('auth');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');



Route::get('/newGroup', function () {
    return view('addGroups');
})->name('newGroup')->middleware('auth');




Route::get('/viewbooks', function () {
    return view('viewBook');
})->name('viewBook');




Route::get('categories/{category}/destroy', [CategoryController::class, 'destroy']);




Route::get('/contact', function () {
    return view('contact');
})->name('contact');






