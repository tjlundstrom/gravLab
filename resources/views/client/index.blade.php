@extends('layouts.template')

@section('title', 'All Clients')

@section('header')
	@parent
@endsection

@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
        	<ul class="list-group">

      		@foreach($clients as $client)
      			<li class="list-group-item"><a href="client/{{$client->id}}">Client: {{$client->clientName}}</a> -- ID#: {{$client->id}} <br> Address: {{$client->address}} - {{$client->city}}, {{$client->state}}</li>
    			@endforeach

    			</ul>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection