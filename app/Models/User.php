<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable; // Enables factory methods and notification features for the User model

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password', // Attributes that can be mass-assigned
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password', // Password should not be visible in arrays or JSON
        'remember_token', // Token used for "remember me" functionality
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime', // Casts the email verification timestamp to a datetime
            'password' => 'hashed', // Indicates that the password should be hashed
        ];
    }

    // Define the relationship between a user and their comments
    public function comments() {
        return $this->hasMany(Comment::class); // A user can have multiple comments
    }

    // Define the relationship between a user and their posts
    public function posts() {
        return $this->hasMany(Post::class); // A user can have multiple posts
    }
}
