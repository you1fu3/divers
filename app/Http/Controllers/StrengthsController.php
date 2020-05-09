<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class StrengthsController extends Controller
{
    public function index(){
        
        $data = [];
        if(\Auth::check()) {
            $user =\Auth::user();
            $user_strengths = $user->user_strengths()->get();
            $strengths = App\Strength::all();
        
            $data = [
                'user' => $user,
                'user_strengths' => $user_strengths,
                'strengths' => $strengths,
            ];
        
        }
        
        return view('welcome', $data);
    }
    
    public function show($id) {
        
        $user = \Auth::user();
        $check = $user->user_strengths()->where('strength_id', $id)->value('rank');
        $posts = App\Post::where('strength_id', $id)->with('post_user')->get();
        
        $data = [
            'check' => $check,
            'posts' => $posts,
            'id' => $id,
        ];
        
        return view('strengths.show', $data);
    }
    
    public function store(Request $request) {
        
        $this->validate($request, [
            'title' => 'required|max:191',
            'content' => 'required',
            'strength_id' => 'required',
        ]);
        
        $request->user()->user_posts()->create([
            'title' => $request->title,
            'content' => $request->content,
            'strength_id' => $request->strength_id,
        ]);
        
        return back();
    }
}
