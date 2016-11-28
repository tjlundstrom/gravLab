@extends('layouts.template')

@section('title', 'All Clients')

@section('header')
	@parent
@endsection

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2"><!--Company Info-->
      <div class="panel panel-default">
        <div class="panel-heading clearfix">
          <h4> {{$client->clientName}} -- Client ID: {{$client->id}}<a href="client_edit.php"><button class="btn btn-warning pull-right">Edit</button></a></h4>
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
    <div class="col-md-8 col-md-offset-2"><!--Company Info-->
      <div class="panel panel-default">
        <div class="panel-heading clearfix">
          <h4> {{$client->clientName}}'s Units<a href="client_edit.php"><button class="btn btn-warning pull-right">Edit</button></a></h4>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              @{{$UnitID}} -- @{{$UnitModel}} -- @{{$PermitNumber}}
            </div>
          </div>
        </div>
        <hr>
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              @{{$UnitID}} -- @{{$UnitModel}} -- @{{$PermitNumber}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2"><!--Company Info-->
      <div class="panel panel-default">
        <div class="panel-heading clearfix">
          <h4> {{$client->clientName}}'s Jobs</h4>
        </div>
        <ul>
          <li class="text-primary"><a href="#"> Job 1</a></li>
          <li class="text-primary"><a href="#"> Job 2</a></li>
          <li class="text-primary"><a href="#"> Job 3</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

@endsection