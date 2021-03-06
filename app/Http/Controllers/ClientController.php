<?php

namespace App\Http\Controllers;

use App\Client;
use App\ClientUnits;
use App\Job;
use Request;

class ClientController extends Controller
{
	public function index()
	{
		$clients = Client::all();

		return view('client.index', compact('clients'));
	}

	public function show($id)
	{
			$client = Client::findOrFail($id);

			if (Request::session()->has('client')){
				Request::session()->forget('client');
			}

			Request::session()->put('client', $client->id);

			$units = ClientUnits::all()->where('client_id', $id);

			$jobs = Job::all()->where('client_id', $id);

			return view('client.show', compact('client', 'units', 'jobs'));
	}

	public function create()
	{
			return view('client.create');
	}

	public function store()
	{
			$input = Request::all();

			Client::create($input);

			return redirect('client');

	}

	public function edit($id)
	{
			$client = Client::findOrFail($id);

			return view('client.edit', compact('client'));
	}

	public function update($id, Request $request)
	{
			$client = client::findOrFail($id);

			$client->update(Request::all());

			$clientId = $client['id'];

      return redirect()->action('ClientController@show', ['client' => $clientId]);
	}
}
