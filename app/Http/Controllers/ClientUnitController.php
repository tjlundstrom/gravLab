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

   		//ClientUnits::create($input);

         $client = $input['client_id'];

         return redirect()->action('ClientController@show', ['client' => $client]);
   }

   public function edit($id, $clientId)
   {
   		$clientUnit = ClientUnit::findOrFail($id, $clientId);

   		return view('client.edit', compact('clientUnit'));
   }
}
