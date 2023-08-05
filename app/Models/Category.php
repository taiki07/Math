<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    
    public function school()
    {
        return $this->belongsTo(School::class);
    }
    
    public function test()   
    {
        return $this->belongsTo(Test::class);  
    }
    
    public function unit()   
    {
        return $this->belongsTo(Unit::class);  
    }
    
    public function mathusers()   
    {
        return $this->hasMany(Mathuser::class);  
    }
    
    public function posts()   
    {
        return $this->hasMany(Post::class);  
    }
}
