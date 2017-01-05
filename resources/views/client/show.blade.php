@extends('layouts.template')

@section('title', 'Selected Client')

@section('header')
	@parent
@endsection

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2"><!--Company Info-->
      <div class="panel panel-default">
        <div class="panel-heading clearfix">
          <h4> {{$client->clientName}} -- Client ID: {{$client->id}}<a href="/client/{{$client->id}}/edit"><button class="btn btn-primary pull-right">Edit</button></a></h4>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              {{$client->address}} <br> {{$client->city}}, {{$client->state}}
            </div>
            <div class="col-md-3">
              Plant Number: {{$client->phoneNumber}}
            </div>
          </div>
        </div>
        <hr>
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              Contact: {{$client->contactName}}
            </div>
            <div class="col-md-3">
              Contact Number: {{$client->contactPhoneNumber}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2"><!--Unit Info-->
      <div class="panel panel-default">
        <div class="panel-heading clearfix">
          <h4> {{$client->clientName}}'s Units<a href="/clientUnit/create"><button class="btn btn-success pull-right">New</button></a></h4>
        </div>
        @foreach($units as $unit)
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <h5>Unit Name: {{$unit->unitIdentifier}} | Unit Model: {{$unit->unitModel}} | Permit Number: {{$unit->permitNumber}}</h5>
              <div class="row">
                <a href="/clientUnit/{{$unit->id}}/edit" class="col-md-2 col-md-offset-4"><button type='button' class="btn btn-primary">Edit</button></a>
                {{ Form::open(array('url' => 'clientUnit/'. $unit->id, 'class' => 'form-inline col-md-2')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                {{ Form::close() }}
              </div>
            </div>
          </div>
        </div>
        <hr>
        @endforeach
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2"><!--Job Info-->
      <div class="panel panel-default">
        <div class="panel-heading clearfix">
          <h4> {{$client->clientName}}'s Jobs <a href="/job/create"><button class="btn btn-success pull-right">New</button></a></h4>
        </div>
        <ul>
        @foreach($jobs as $job)
          <li class="text-primary"><a href="/job/{{$job->id}}"> {{$job->title}}</a></li>
        @endforeach
        </ul>
      </div>
    </div>
  </div>
</div>

@endsection