<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // using category 
    protected $with = ['category'];
    // defining a belongsTo relation
    public function category(){ 
        return $this->belongsTo(Category::class);
    }
}
