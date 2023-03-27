<?php

namespace App\Http\Controllers;

use App\Models\books;
use App\Models\groups;
use App\Models\category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use PHPUnit\TextUI\Configuration\Php;
use Illuminate\Validation\Rule;

class BooksController extends Controller
{


    function get_books()
    {
        $books_data = books::paginate(5);
        return view('home', [
            'data' => $books_data
        ]);
    }
 

    function get_booksss()
    {
        $books_data = books::paginate(5);
        $category = category::all();
        return view('admin', [
            'data' => $books_data,
            'category' => $category
        ]);
    }

    function insert(Request $req)
    {
        $name = $req->get('name');
        $description = $req->get('description');
        $auth = $req->get('auth');
        $picture = $req->file('picture');
        $id_category = $req->get('category_id');


        $books = new books();
        $books->name =  $name;
        $books->description =  $description;
        $books->auth =  $auth;
        $books->picture =  $picture;
        $books->category_id =  $id_category;
        if ($req->hasFile('picture')) {
            $form['picture'] = $req->file('picture')->store('picture', 'public');
        }
        $books->save();
        return redirect('/admin');
    }




    function update(Request $request, Books $book)
    {

        $form = $request->all();
    
        if ($request->hasFile('picture')) {
            $picturePath = $request->file('picture')->store('public/picture');
            $form['picture'] = $picturePath;
        }
        
        // Convert category string to integer
        $form['category_id'] = (int)$form['category'];
        unset($form['category']);
        
        $book->update($form);
    
        return redirect('/admin');
    }

    public function edit(Books $book)
    {
        // dd($book);
        $category = category::all();
        return view('update', [
            'books' => $book,
            'categories' => $category

        ]);
    }


    public function show($id)
    {
        $book = books::find($id);
        
        return view('viewBook', [
            'book' => $book
        ]);
    }


    public function destroy(Books $book)
    {
        $book->delete();

        return redirect('/admin')->with('success', 'Book deleted successfully!');
    }
}
