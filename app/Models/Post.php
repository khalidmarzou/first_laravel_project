<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory; // Enables factory methods for creating model instances

    // Define the relationship between a post and its user
    public function user() {
        return $this->belongsTo(User::class); // A post belongs to a user
    }

    // Define the relationship between a post and its comments
    public function comments() {
        return $this->hasMany(Comment::class); // A post can have multiple comments
    }

    // Define the many-to-many relationship between posts and tags
    public function tags() {
        return $this->belongsToMany(Tag::class); // A post can have multiple tags
    }
}
