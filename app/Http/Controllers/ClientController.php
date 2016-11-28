<?php

namespace App\Http\Controllers;

use App\Client;
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

			return view('client.show', compact('client'));
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

			return redirect('client');
	}
}
