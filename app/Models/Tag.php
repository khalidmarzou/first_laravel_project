<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory; // Enables factory methods for creating model instances

    // Define the many-to-many relationship between tags and jobs
    public function jobs() {
        return $this->belongsToMany(Job::class, relatedPivotKey: "job_listing_id"); // A tag can belong to multiple jobs
    }

    // Define the many-to-many relationship between tags and posts
    public function posts() {
        return $this->belongsToMany(Post::class); // A tag can belong to multiple posts
    }
}
