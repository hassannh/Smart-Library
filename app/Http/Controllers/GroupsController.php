<?php

namespace App\Http\Controllers;
use App\Models\groups;
use App\Models\user;

use Illuminate\Http\Request;
use PhpParser\Builder\Param;

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
        $user = user::all();
        return view('GroupsAdmin', [
            'data' => $groups_data,
            'user' => $user
        ]);
    }


    public function add_group(Request $req)
    {
        // dd($req);
            $name = $req->get('name');
            $user_id = auth()->user()->id;

            $group = new groups();
            $group->name =  $name;
            $group->user_id =  $user_id;
            $group->save();
            return redirect('/groups');
    }


    public function deleteProfile($id)
    {
        $user = User::find($id);
        
        if (!$user) {
            return redirect('/')->with('error', 'User not found!');
        }
        
        $user->delete();
        
        return redirect('/')->with('success', 'User deleted successfully!');
    }



    public function destroy(groups $groups)
    {
        $groups->delete();

        return redirect('/groupsAdmin')->with('success', 'group deleted successfully!');
    }
}
