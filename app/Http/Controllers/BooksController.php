<?php

namespace App\Http\Controllers;

use App\Models\books;
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
        $books_data = books::all();
        // $books_data = books::latest()->filters(request(['search']));
        return view('home', ['data.get_books','data' => $books_data]);
    }

    function get_booksss()
    {
        $books_data = books::all();
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
        // $form = $request['parameters'];
        // dd($request);
        $form = $request->validate([

            'name' => 'required',
            'description' => 'required',
            'auth' => 'required',
            'picture' => 'required',
            'id_category' => 'required',


        ]);
        // dd($request);

        if ($request->hasFile('picture')) {
            $form['picture'] = $request->file('picture')->store('picture', 'public');
        }


        $book->update($form);

        return redirect('/admin');
    }

    public function edit(Books $book)
    {
        // dd($book);
        return view('update', [
            'books' => $book
        ]);
    }


    public function destroy(Books $book)
    {
        $book->delete();

        return redirect('/admin')->with('success', 'Book deleted successfully!');
    }
}
