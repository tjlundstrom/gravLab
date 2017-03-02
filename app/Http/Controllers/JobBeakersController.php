<?php

namespace App\Http\Controllers;

use Request;
use App\Beakers;
use App\Job;
use App\JobUnit;
use App\JobBeakers;
use App\Client;

class JobBeakersController extends Controller
{
    public function create()
    {
    	$job_id = Request::session()->get('job');

    	$beakers = Beakers::all();

    	$units = JobUnit::all()->where('job_id', $job_id);

    	return view('jobBeakers.create', compact('beakers', 'units', 'job_id'));
    }

    public function store()
    {
    	$beakers = Request::input('beakers');
        $job = Request::input('job_id');
        $unit = Request::input('unit');

        $allBeakers = [];

        foreach($beakers as $beaker){
            $jobBeaker = new JobBeakers;

            $jobBeaker->job_id = $job;
            $jobBeaker->jobUnit_id = $unit;
            $jobBeaker->pre_weight_1 = 0;
            $jobBeaker->pre_weight_2 = 0;
            $jobBeaker->post_weight_1 = 0;
            $jobBeaker->post_weight_2 = 0;
            $jobBeaker->runNumber = "";
            $jobBeaker->description = "";
            if(substr($beaker, 0, 2) == 'CS'){
                $jobBeaker->prefix = substr($beaker, 0, 2);

                $jobBeaker->number = substr_replace($beaker, "", 0, 2);
            }
            else {
                $jobBeaker->number = $beaker;
            }

            $jobBeaker->save();
        }


        return redirect()->action('JobController@show', ['job' => $job]);
    }

    public function edit($id)
    {
        $job_id = Request::session()->get('job');
        $jobBeakers = JobBeakers::all()->where('jobUnit_id', $id);

        $client = Client::findOrFail(Request::session()->get('client'));

        return view('jobBeakers.edit', compact('jobBeakers', 'id'));
    }

    public function update($id)
    {
        $input = Request::except('_token', '_method');

        foreach($input as $beaker){
            $beakerId = $beaker[6];
            $beakerUpdate = JobBeakers::findOrFail($beakerId);

            $beakerUpdate->pre_weight_1 = $beaker[0];
            $beakerUpdate->pre_weight_2 = $beaker[1];
            $beakerUpdate->post_weight_1 = $beaker[2];
            $beakerUpdate->post_weight_2 = $beaker[3];
            $beakerUpdate->runNumber = $beaker[4];
            $beakerUpdate->description = $beaker[5];

            $beakerUpdate->save();
        }

        $job_id = Request::session()->get('job');

        return redirect()->action('JobController@show', ['job' => $job_id]);
    }
}
