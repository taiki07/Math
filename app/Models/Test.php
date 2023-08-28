<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;
    public function posts()   
    {
        return $this->hasOne(Post::class);  
    }
    
    public function getByTest(int $limit_count = 5)
    {
         return $this->posts()->with('test')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
