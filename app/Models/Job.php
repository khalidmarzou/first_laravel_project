<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model {
    use HasFactory; // Enables factory methods for creating model instances

    protected $table = 'job_listings'; // Specifies the database table associated with the model

    // The fillable property is an array of attributes that are allowed to be mass-assigned
    protected $fillable = ['title', 'salary', 'employer_id'];

    // Uncomment the following line to use guarded property instead
    // protected $guarded = []; // The guarded property is an array of attributes that are not allowed to be mass-assigned

    // Define the relationship between a job and its employer
    public function employer() {
        return $this->belongsTo(Employer::class); // A job belongs to an employer
    }

    // Define the many-to-many relationship between jobs and tags
    public function tags() {
        return $this->belongsToMany(Tag::class, foreignPivotKey: "job_listing_id"); // A job can have multiple tags
    }
}
