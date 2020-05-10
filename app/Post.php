<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable =['user_id', 'strength_id', 'title', 'content'];
    
    public function post_user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    
    public function post_strength()
    {
        return $this->belongsTo(Strength::class);
    }
    
    public function comment()
    {
        return $this->hasMany(Comment::class);
    }
}
