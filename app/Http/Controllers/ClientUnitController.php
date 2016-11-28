<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientUnitController extends Controller
{
   public function create()
   {
   		return view('clientUnit.create');
   }

   public function store()
   {
   		$input = Request::all();

   		ClientUnit::create($input);

   		return redirect('client');
   }

   public function edit($id, $clientId)
   {
   		$clientUnit = ClientUnit::findOrFail($id, $clientId);

   		return view('client.edit', compact('clientUnit'));
   }
}
