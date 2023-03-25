<?php

namespace App\Http\Controllers;

use App\Models\comments;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function addComment(Request $comment)
    {
        $user_id = auth()->user()->id;
        $comment_text = $comment->get('comment');
        $group_id = $comment->get('groups_id'); 
        $data = new comments();
        $data->comment = $comment_text;
        $data->user_id = $user_id;
        $data->groups_id = $group_id; 
        $data->save();
        $this->getAllComments($group_id);
    }
    public function getAllComments($id)
    {
        $data = comments::where('groups_id', $id)->get();
        return view('joinGroup',['data'=>$data]);
    }
}
