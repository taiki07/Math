<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;
    public function posts()   
    {
        return $this->hasOne(Post::class);  
    }
    
    public function getByUnit(int $limit_count = 5)
    {
         return $this->posts()->with('unit')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
