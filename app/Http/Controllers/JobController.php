<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Livewire\WithPagination;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    use WithPagination;

    public function index()
    {
        $jobs = Job::paginate(10);
        // dd($jobs);
        return view('jobsBoard')->with('jobs', $jobs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getSingleJob($id)
    {
        $job = Job::find($id);
        // // dd($job);

        $relatedJobs = Job::where('id', '!=', $id)
            ->where(function ($query) use ($job) {
                $query->where('job_title', $job->job_title)
                    ->orWhere('job_type', $job->job_type)
                    ->orWhere('location_full', $job->location_full)
                    ->orWhere('seniority', $job->seniority);
            })
            ->paginate(10);

        return view('singleJob')->with([
            'job' => $job,
            'relatedJobs' => $relatedJobs,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
