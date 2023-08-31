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

    public function index(Request $request)
    {
        $filter = $request->filter;

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
     * Show the form for creating a new resource.
     *@param  \Illuminate\Http\Request 
     * @return \Illuminate\Http\Response
     */
    public function filterByArea(Request $request)
    {
        $functional_area = $request->input('functional_area');
        $jobs = Job::where('functional_area', 'LIKE', '%' . $functional_area . '%')
            ->paginate(10);
        // dd($jobs);
        return view('jobsBoard', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *@param  \Illuminate\Http\Request 
     * @return \Illuminate\Http\Response
     */
    public function filterBySeniority(Request $request)
    {
        $seniority = $request->input('seniority');
        $jobs = Job::where('seniority', 'LIKE', '%' . $seniority . '%')
            ->paginate(10);
        // dd($jobs);
        return view('jobsBoard', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *@param  \Illuminate\Http\Request 
     * @return \Illuminate\Http\Response
     */
    public function filterByPerks(Request $request)
    {
        $perks = $request->input('perks');
        $jobs = Job::where('perks', 'LIKE', '%' . $perks . '%')
            ->paginate(10);
        // dd($jobs);
        return view('jobsBoard', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *@param  \Illuminate\Http\Request 
     * @return \Illuminate\Http\Response
     */
    public function filterByLocation(Request $request)
    {
        $location_full = $request->input('location_full');
        $jobs = Job::where('location_full', 'LIKE', '%' . $location_full . '%')
            ->paginate(10);
        // dd($jobs);
        return view('jobsBoard', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *@param  \Illuminate\Http\Request 
     * @return \Illuminate\Http\Response
     */
    public function filterByKeyword(Request $request)
    {
        $keyword = $request->input('keyword');
        $jobs = Job::whereRaw("MATCH(
            job_title,
            fecha, 
            job_type,
            company_name,
            location_full,
            url,
            perks,
            seniority,
            functional_area
            ) AGAINST(? IN BOOLEAN MODE)", [$keyword])
            ->paginate(10);
        // dd($jobs);
        return view('jobsBoard', compact('jobs'));
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
