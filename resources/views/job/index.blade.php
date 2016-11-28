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
                        <li> {{$job->jobID}} {{$job->jobNumber}} {{$job->clientID}} {{$job->jobTitle}} {{$job->jobType}} {{$job->jobDescription}} </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection