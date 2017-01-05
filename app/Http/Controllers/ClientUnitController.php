<?php

namespace App\Http\Controllers;

use App\ClientUnits;
use App\Client;
use Request;

class ClientUnitController extends Controller
{
   public function create()
   {
      $client = Client::findOrFail(Request::session()->get('client'));

		return view('clientUnit.create', compact('client'));
   }

   public function store()
   {
		$input = Request::all();

		ClientUnits::create($input);

      $client = $input['client_id'];

      return redirect()->action('ClientController@show', ['client' => $client]);
   }

   public function edit($id)
   {
		$clientUnit = ClientUnits::findOrFail($id);

      $client = Client::findOrFail(Request::session()->get('client'));

		return view('clientUnit.edit', compact('clientUnit', 'client'));
}

   public function update($id)
   {
      $clientUnit = ClientUnits::findOrFail($id);

      $clientUnit->update(Request::all());

      $clientId = Request::session()->get('client');

      return redirect()->action('ClientController@show', ['client' => $clientId]);
   }

   public function destroy($id)
   {
      $clientUnit = ClientUnits::findOrFail($id);

      $clientUnit->delete();

      $clientId = Request::session()->get('client');

      return redirect()->action('ClientController@show', ['client' => $clientId]);
   }
}
