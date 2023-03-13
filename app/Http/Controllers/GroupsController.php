<?php

namespace App\Http\Controllers;
use App\Models\groups;

use Illuminate\Http\Request;

class GroupsController extends Controller
{
    function get_groups()
    {
        $groups_data = groups::all();
        // $books_data = books::latest()->filters(request(['search']));
        return view('groups', ['data.get_groups','data' => $groups_data]);
    }
}
