<?php

namespace App\Http\Controllers;
use App\Models\Favoris;
use Illuminate\Http\Request;

class FavorisController extends Controller
{
    
    public function add(Request $request)
    {
        
        $user_id = auth()->user()->id;
        $books_id = $request->input('books_id');
        $favorite = new Favoris;
        $favorite->user_id = $user_id;
        $favorite->books_id = $books_id;
        $favorite->save();

        return redirect('/');

        // return response()->json(['message' => 'Item added to favorites.']);
    }
}
