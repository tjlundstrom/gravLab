@extends('layouts.template')

@section('title', 'Unit Edit')

@section('header')
    @parent
@endsection

@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          {!! Form::model($jobBeakers, ['action' => ['JobBeakersController@update', $jobUnit->id], 'method' => 'PATCH', 'class' => 'form-horizontal']) !!}
            {{method_field('PATCH')}}
            @include('jobBeakers.formEdit', ['submitButtonText' => 'Update Unit Info'])
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
</div>

@endsection