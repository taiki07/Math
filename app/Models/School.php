<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;
    public function posts()   
    {
        return $this->hasOne(Post::class);  
    }
    
    public function getBySchool(int $limit_count = 5)
    {
         return $this->posts()->with('school')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
