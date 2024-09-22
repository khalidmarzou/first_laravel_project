<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    // Display a list of jobs, paginated (4 jobs per page) and ordered by latest.
    public function index(){
        // Fetch jobs with their related employer, latest first, paginate by 4
        $jobs = Job::with('employer')->latest()->simplePaginate(4);

        // Return the view for listing jobs, passing the jobs data to the view
        return view('jobs.index', [
            'jobs' => $jobs
        ]);
    }

    // Show the form for creating a new job listing
    public function create(){
        // Return the view for creating a new job
        return view('jobs.create');
    }

    // Display the details of a specific job
    public function show(Job $job){
        // Return the view for showing a single job, passing the job data to the view
        return view('jobs.show', ['job' => $job]);
    }

    // Store a newly created job in the database
    public function store(){
        // Validate the incoming request data
        request()->validate([
            'title' => ['min:3'],  // Title should have at least 3 characters
            'salary' => ['numeric']  // Salary should be a numeric value
        ]);

        // Create a new job with the validated data
        Job::create([
            'title' => request('title'),  // Get the title from the request
            'salary' => request('salary'),  // Get the salary from the request
            'employer_id' => 1  // Set a default employer ID (this can be dynamic later)
        ]);

        // Redirect back to the jobs list after successful creation
        return redirect('/jobs');
    }

    // Show the form for editing a specific job
    public function edit(Job $job){
        // Return the view for editing the job, passing the job data to the view
        return view('jobs.edit', ['job' => $job]);
    }

    // Update the details of a specific job in the database
    public function update(Job $job){
        // Validate the incoming request data
        request()->validate([
            'title' => ['min:3'],  // Title should have at least 3 characters
            'salary' => ['numeric']  // Salary should be a numeric value
        ]);

        // Authorization logic can go here (e.g., check if the user has permission to update the job)

        // Update the job with the new data from the request
        $job->title = request('title');  // Update title
        $job->salary = request('salary');  // Update salary
        $job->save();  // Save the changes to the database

        // Alternatively, you could use the update method (commented out below)
        // $job->update([
        //     'title' => request('title'),
        //     'salary' => request('salary')
        // ]);

        // Redirect to the updated job's page after saving
        return redirect('/jobs/' . $job->id);
    }

    // Delete a specific job from the database
    public function destroy(Job $job){
        // Delete the job from the database
        $job->delete();

        // Redirect back to the jobs list after deletion
        return redirect('/jobs');
    }
}
