<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class User_strengthsController extends Controller
{
    public function showStrengthForm()
    {
        $strengths = App\Strength::all()->pluck('strength');
        
        $data = [
            'strengths' => $strengths,
        ];
        
        return view('auth.strength_register', $data);
    }
    
    public function store(Request $request)
    {
        
        $user = $request->user();
        $rows = $request->input('strength');
        
        foreach($rows as $key => $row){
            $strength = App\Strength::where('id',$row+1)->value('id');
        
            $user->user_strengths()->create([
                'rank' => $key+1,
                'strength_id' => $strength,
            ]);
        }
        
        return view('welcome');
    }
}
