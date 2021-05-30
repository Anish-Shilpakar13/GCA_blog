<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    // defining a hasMany relation with posts 
    public function posts(){
        return $this->hasMany(Post::class);
    }
}
