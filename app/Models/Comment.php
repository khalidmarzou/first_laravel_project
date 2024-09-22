<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory; // Enables factory methods for creating model instances

    // Define the relationship between a comment and its user
    public function user() {
        return $this->belongsTo(User::class); // A comment belongs to a user
    }

    // Define the relationship between a comment and its post
    public function post() {
        return $this->belongsTo(Post::class); // A comment belongs to a post
    }
}
