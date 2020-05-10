<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class CommentsController extends Controller
{
    public function show($id)
    {
        $user = \Auth::user();
        $post_strength = App\Post::where('id',$id)->value('strength_id');
        $check = $user->user_strengths()->where('strength_id', $post_strength)->value('rank');
        $comments = App\Comment::where('post_id', $id)->with('user')->get();
        $post = App\Post::where('id',$id)->first();
   
        $data = [
            'check' => $check,
            'comments' => $comments,
            'post' => $post,
            'id' => $id,
        ];
        
        return view('comments.show', $data);
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'comment' => 'required|max:191',
            'post_id' => 'required',
        ]);
        
        $user_id = $request->user();
        
        $request->user()->comment()->create([
            'user_id' => $user_id->id,
            'comment' => $request->comment,
            'post_id' => $request->post_id,
        ]);
        return back();
    }
}
