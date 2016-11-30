<?php

namespace App\Http\Controllers;

use App\ClientUnits;
use App\Client;
use Request;

class ClientUnitController extends Controller
{
   public function create($client)
   {
      $client = Client::findOrFail($client);

		return view('clientUnit.create', compact('client'));
   }

   public function store()
   {
		$input = Request::all();

		ClientUnits::create($input);

      $client = $input['client_id'];

      return redirect()->action('ClientController@show', ['client' => $client]);
   }

   public function edit($clientId, $id)
   {
		$clientUnit = ClientUnits::findOrFail($id);

      $client = Client::findOrFail($clientId);

		return view('clientUnit.edit', compact('clientUnit', 'client'));
}

   public function update($clientId, $id, Request $request)
   {
      $clientUnit = ClientUnits::findOrFail($id);

      $clientUnit->update(Request::all());

      $clientId = $clientId;

      return redirect()->action('ClientController@show', ['client' => $clientId]);
   }

   public function destroy($clientId, $id)
   {
      $clientUnit = ClientUnits::findOrFail($id);

      $clientUnit->delete();

      $clientId = $clientId;

      return redirect()->action('ClientController@show', ['client' => $clientId]);
   }
}
