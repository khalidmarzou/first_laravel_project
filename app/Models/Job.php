<?php

namespace App\Models;
use \Illuminate\Support\Arr;




class Job {
    public static function all() : array {
        return [
            ['id' => 1, 'title' => 'Software Engineer', 'salary' => 5000],
            ['id' => 2, 'title' => 'Data Scientist', 'salary' => 6000],
            ['id' => 3, 'title' => 'Project Manager', 'salary' => 7000],
        ];
    }

    public static function find(int $id) : array {
        $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);

        if(!$job) {
            abort(404);
        } else {
            return $job;
        }
    }
}