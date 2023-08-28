<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mathuser extends Model
{
    use HasFactory;
    
    public function posts()   
    {
        return $this->hasOne(Post::class);  
    }
    
    public function getByMathuser(int $limit_count = 5)
    {
         return $this->posts()->with('mathuser')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
