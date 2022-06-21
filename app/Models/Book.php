<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Author;
use App\Models\Review;

class Book extends Model
{
    // protected $hidden = ['id', 'created_at', 'updated_at'];

    public function authors()
    {
        return $this->belongsToMany(Author::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
