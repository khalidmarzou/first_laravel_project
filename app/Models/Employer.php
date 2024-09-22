<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory; // Enables factory methods for creating model instances

    // Define the relationship between an employer and their jobs
    public function jobs() {
        return $this->hasMany(Job::class); // An employer can have multiple jobs
    }
}
