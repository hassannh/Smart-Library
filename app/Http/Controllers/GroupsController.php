<?php

namespace App\Http\Controllers;
use App\Models\groups;
use App\Models\user;

use Illuminate\Http\Request;

class GroupsController extends Controller
{

    public function get_users()
    {
        $users = user::paginate(5);
        return view('showUsers', [
            'data' => $users]);
    }
    
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





    public function add_group(Request $req)
    {
            $name = $req->get('name');
            
            $group = new groups();
            $group->name =  $name;
            $group->save();
            return redirect('/admin');
    }
}
