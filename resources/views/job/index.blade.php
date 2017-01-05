@extends('layouts.template')

@section('title', 'All Jobs')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    <ul class="list-group">

                        @foreach($jobs as $job)
                        <li> <a href="job/{{$job->id}}"> {{$job->number}} || {{$job->client->clientName}} || {{$job->title}}</a> || {{$job->type}} || {{$job->description}} </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection