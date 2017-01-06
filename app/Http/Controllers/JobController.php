<?php

namespace App\Http\Controllers;

use Request;
use App\Job;
use App\Client;
use App\JobUnit;
use App\JobBeakers;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::all();

        return view('job.index', compact('jobs'));
    }

    public function show($jobID)
	{
        //Finding neccesary objects
		$job = Job::findOrFail($jobID);
        $jobBeakers = JobBeakers::all()->where("job_id", $jobID);
        $jobUnits = JobUnit::all()->where('job_id', $job->id);

        if (Request::session()->has('job')){
            Request::session()->forget('job');
        }

        Request::session()->put('job', $job->id);

		return view('job.show', compact('job', 'jobUnits', 'jobBeakers'));
	}

    public function create()
    {
        $client = Client::findOrFail(Request::session()->get('client'));

        return view('job.create', compact('client'));
    }

    public function store()
    {
        $input = Request::all();

        $job = Job::create($input);

        return redirect()->action('JobController@show', ['job' => $job]);
    }

    public function edit($id)
    {
        $job = Job::findOrFail($id);

        $client = Client::findOrFail(Request::session()->get('client'));

        return view('job.edit', compact('job', 'client'));
    }

    public function update($id)
    {
        $job = Job::findOrFail($id);

        $job->update(Request::all());

        $clientId = Request::session()->get('client');

        return redirect()->action('JobController@show', ['job' => $job->id]);

    }
}
