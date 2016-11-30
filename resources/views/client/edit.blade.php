<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.template')

@section('title', 'Client Edit')

@section('header')
    @parent
@endsection

@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          {!! Form::model($client, array('route' => array('client.update', $client->id), 'method' => 'PATCH', 'class' => 'form-horizontal')) !!}
            {{method_field('PATCH')}}
            @include('client.form', ['submitButtonText' => 'Update Client Info'])
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
</div>

@endsection