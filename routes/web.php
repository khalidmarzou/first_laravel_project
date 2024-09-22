<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use \App\Models\Job;

// Route to the homepage, rendering the 'home' view
Route::view('/', 'home');

// Route to the contact page, rendering the 'contact' view
Route::view('/contact', 'contact');

// Uncomment the following block to manually define individual routes for the JobController
// Jobs CRUD (Create, Read, Update, Delete):
/*
Route::controller(JobController::class)->group(function () {
    // Displays the list of jobs (index method)
    Route::get('/jobs', 'index');

    // Shows the form to create a new job (create method)
    Route::get('/jobs/create', 'create');

    // Displays a specific job's details (show method)
    Route::get('/jobs/{job}', 'show');

    // Stores a new job in the database (store method)
    Route::post('/jobs', 'store');

    // Shows the form to edit an existing job (edit method)
    Route::get('/jobs/{job}/edit', 'edit');

    // Updates an existing job's information (update method)
    Route::patch('/jobs/{job}', 'update');

    // Deletes a specific job from the database (destroy method)
    Route::delete('/jobs/{job}', 'destroy');
});
*/

// Job CRUD with resource methods:
// Automatically generates routes for all standard CRUD operations (index, create, store, show, edit, update, destroy)
Route::resource('jobs', JobController::class /*, [
    'except' => [] // Generates all routes except the ones specified here
    // Use 'only' to generate only specific routes instead of all
]*/);
