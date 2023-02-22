<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\books;

class BooksController extends Controller
{
    
    function get_books(){
        // $books = new books();
        $books_data = books::all();
        return view('home',['data'=>$books_data]);
    }
    
    function get_bookss(){
        // $books = new books();
        $books_data = books::all();
        return view('admin',['data'=>$books_data]);
    }

    function insert(Request $req)
    {
        $name = $req->get('name');
        $price = $req->get('price');
        $auth = $req->get('auth');
        $picture = $req->file('picture');
       

       $books = new books();
       $books->name =  $name;
       $books->price =  $price;
       $books->auth =  $auth;
       $books->picture =  $picture;
       $books->save();
       return redirect('/admin');
    }
}
