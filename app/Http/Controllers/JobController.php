<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index(Request $request)
    {
        // Dummy data – replace with DB model like Job::query()
        $jobs = collect([
            ['title' => 'Frontend Developer', 'location' => 'Lisbon', 'category' => 'engineering', 'company' => 'Tech Co'],
            ['title' => 'Marketing Analyst', 'location' => 'Porto', 'category' => 'marketing', 'company' => 'Ad Group'],
        ]);

        $filtered = $jobs->filter(function ($job) use ($request) {
            return str_contains(strtolower($job['title']), strtolower($request->keyword ?? '')) &&
                   str_contains(strtolower($job['location']), strtolower($request->location ?? '')) &&
                   ($request->category ? $job['category'] === $request->category : true);
        });

        return view('jobs.index', [
            'jobs' => $filtered,
            'filters' => $request->only(['keyword', 'location', 'category']),
        ]);
    }
}
