<?php

namespace App\Http\Controllers;

use App\Client;
use App\ClientUnits;
use App\Job;
use App\JobUnit;
use Request;

class JobUnitController extends Controller
{
    public function create()
    {
    	$client = Client::findOrFail(Request::session()->get('client'));

    	$clientUnits = ClientUnits::where('client_id', $client->id)->get();

    	$job = Job::findOrFail(Request::session()->get('job'));

    	return view('jobUnit.create', compact('clientUnits', 'job'));
    }

    public function store()
    {   

    	$units = Request::input('clientUnit_id');
    	$job = Request::input('job_id');
        $fuel = Request::input('fuel');
        $load = Request::input('load');

    	for($i=0; $i<count($units); $i++){
    		$jobUnit = new JobUnit;

            $jobUnit->clientUnit_id = $units[$i];
            $jobUnit->job_id = $job;
            $jobUnit->fuel = $fuel[$i];
            $jobUnit->load = $load[$i];

            $jobUnit->save();
    	}

        return redirect()->action('JobController@show', ['job' => $job]);
    }

    public function destroy($id)
    {
      $jobUnits = JobUnit::findOrFail($id);

      $jobUnits->delete();

      $job = Request::session()->get('job');

      return redirect()->action('JobController@show', ['job' => $job]);
    }
}
