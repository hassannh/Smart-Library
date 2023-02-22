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


    function update(Request $req){

        $ID = $req->get('id');
        $Name = $req->get('name');
        $Price = $req->get('price');
        $auth = $req->get('auth');
        $picture = $req->file('picture');

        $books = books::find($ID);

        $books->name = $Name;
        $books->price = $Price;
        $books->auth = $auth;
        $books->picture = $picture;
        $books->save();
        return redirect('/admin');

    }


    // function updateORdelete(Request $req)
    // {
    //     $id = $req->get('id');
    //     $name = $req->get('name');
    //     $price = $req->get('price');
    //     $auth = $req->get('auth');
    //     $picture = $req->file('picture');
    //     if($req->get('update') == 'Update'){
    //         return view('update',['id'=>$id,'name'=>$name,'price'=>$price ,'auth'=>$auth , 'picture'=>$picture ]);

    //     }else{
    //         $prod = books::find($id);
    //         $prod->delete();
    //         return redirect('/admin');
    //     }
    // }
}
