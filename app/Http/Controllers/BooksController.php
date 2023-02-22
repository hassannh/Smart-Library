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


    function insert(Request $req)
    {
        $name = $req->get('name');
        $price = $req->get('price');
        $auth = $req->get('auth');
        $picture = $req->file('picture')->getClientOriginalName();
        // move uploaded file
        $req->product_picture->move(public_path('picture'),$picture);

       $product = new books();
       $product->book_name =  $name;
       $product->book_price =  $price;
       $product->book_auth =  $auth;
       $product->book_picture =  $picture;
       $product->save();
       return redirect('/admin');
    }
}
