<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    


    public function get_categories()
    {
        $category_data = category::paginate(5);
        return view('categoryAdmin', [
            'data' => $category_data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function add_category(Request $req)
    {
        $name = $req->get('name');
        $category = new category();
        $category->name =  $name;
        $category->save();
        return redirect('/categories');
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(category $category)
    {
        $category->delete();

        return redirect('/categories')->with('success', 'category deleted successfully!');
    }
}
