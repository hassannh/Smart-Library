<?php

namespace App\Http\Controllers;
use App\Models\groups;

use Illuminate\Http\Request;

class GroupsController extends Controller
{
    function get_groups()
    {
        $groups_data = groups::all();
        
        return view('groups', ['data.get_groups','data' => $groups_data]);
    }



    function get_groupsA()
    {
        $groups_data = groups::paginate(5);
        return view('admin', [
            'data' => $groups_data
        ]);
    }
}
