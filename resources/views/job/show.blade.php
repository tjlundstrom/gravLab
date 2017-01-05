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
          <h4> {{$job->title}} --|-- Type: {{$job->type}}<a href="/job/{{$job->id}}/edit"><button class="btn btn-primary pull-right">Edit</button></a></h4>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              Company: <a href="/client/{{$job->client->id}}">{{$job->client->clientName}} </a>
            </div>
            <div class="col-md-3">
              Job Number: {{$job->number}}
            </div>
          </div>
        </div>
        <hr>
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              Job Description: {{$job->description}}
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
        <div class="panel-heading panel-title">
          <h4> Units to be Tested<a href="/jobUnits/create"><button class="btn btn-success pull-right">New</button></a></h4>
        </div>
        <div role="navigation">
          <ul class="nav nav-pills nav-justified">
            @foreach($jobUnits as $unit)
            <li role="presentation" >
            <a href="#{{$unit->clientUnit->id}}" aria-controls="{{$unit->clientUnit->id}}" role="tab" data-toggle="tab">{{$unit->clientUnit->unitIdentifier}} on {{$unit->fuel}} @ {{$unit->load}}</a>
            </li>
            @endforeach
          </ul>
        </div>
        <div class="panel-body">
          <div class="tab-content">
            @foreach($jobUnits as $unit)
              <div role ="tabpanel" class="tab-pane" id="{{$unit->clientUnit->id}}">
                <div role="navigation">
                  <ul class="nav nav-pills nav-justified">
                    <li role="presentation" >
                    <a href="#beakers{{$unit->id}}" aria-controls="beakers{{$unit->id}}" role="tab" data-toggle="tab">Beaker Data</a>
                    </li>
                    <li role="presentation" >
                    <a href="#filters{{$unit->id}}" aria-controls="filters{{$unit->id}}" role="tab" data-toggle="tab">Filter Data</a>
                    </li>
                  </ul>
                </div>
                <div class="tab-content">
                  <div role ="tabpanel" class="tab-pane" id="beakers{{$unit->id}}">
                  Content goes here
                  </div>
                  <div role ="tabpanel" class="tab-pane" id="filters{{$unit->id}}">
                  Content goes here
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</div>







@endsection