<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_strengths extends Model
{
    protected $fillable = ['user_id', 'strength_id', 'rank'];
    
    public function strength()
    {
        return $this->belongsTo(Strength::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
