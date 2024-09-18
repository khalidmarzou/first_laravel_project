<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Job extends Model {
    use HasFactory;
    protected $table = 'job_listings';
    protected $fillable = ['title','salary', 'employer_id']; // The fillable property is an array of attributes that are allowed to be mass-assigned.

    // protected $guarded = []; // The guarded property is an array of attributes that are not allowed to be mass-assigned.

    public function employer() {
        return $this->belongsTo(Employer::class);
    }

    public function tags() {
        return $this->belongsToMany(Tag::class, foreignPivotKey: "job_listing_id");
    }
}
