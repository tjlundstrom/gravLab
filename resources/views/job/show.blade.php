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
                    <table class="table table-striped">
                      <tr>
                        <th> Beaker Number </th>
                        <th> Run Number </th>
                        <th> Description </th>
                        <th> Pre-Weight Average </th>
                        <th> Post-Weight Average </th>
                      </tr>
                    @foreach($jobBeakers as $beaker)
                      @php
                        $pre_weight_difference = abs($beaker->pre_weight_1-$beaker->pre_weight_2);

                        $post_weight_difference = abs($beaker->post_weight_1-$beaker->post_weight_2);
                      @endphp
                      <tr>
                        <td> {{$beaker->prefix}}{{$beaker->number}}</td>
                        <td> {{$beaker->runNumber}}</td>
                        <td> {{$beaker->description}}</td>

                        @if($pre_weight_difference <= 0.0005)
                          <td class="success"> {{$pre_weight_difference}} </td>
                        @else
                          <td class="danger"> {{$pre_weight_difference}} </td>
                        @endif

                        @if($post_weight_difference <= 0.0005)
                          <td class="success"> {{$post_weight_difference}} </td>
                        @else
                          <td class="danger"> {{$post_weight_difference}} </td>
                        @endif
                      </tr>
                    @endforeach
                    </table> 
                    <a href="jobBeakers/{{$unit->id}}/edit" class="btn btn-block btn-warning" role="button"> Edit </a>
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