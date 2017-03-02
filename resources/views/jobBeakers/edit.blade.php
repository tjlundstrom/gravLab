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
          {!! Form::model($jobBeakers, ['action' => ['JobBeakersController@update', $id], 'method' => 'PATCH', 'class' => 'form-horizontal', 'role' => 'form']) !!}
            {{method_field('PATCH')}}
            {{ csrf_field() }}
              <h3 class="panel-heading">Job Management:</h3>
              <hr>
              <h4 class="col-md-offset-4"> Please Provide the Following Information</h4>
              <br>
              @foreach($jobBeakers as $beaker)
              <div class="form-group">
                <div class="col-sm-12">
                  <h4><strong> Beaker: {{$beaker->prefix.$beaker->number}} </strong></h5>
                </div>
                {!! Form::label($beaker->id, 'Pre-Weight 1:', ['class' => 'control-label col-sm-2']) !!}
                {!! Form::label($beaker->id, 'Pre-Weight 2:', ['class' => 'control-label col-sm-2']) !!}
                {!! Form::label($beaker->id, 'Post-Weight 1:', ['class' => 'control-label col-sm-2']) !!}
                {!! Form::label($beaker->id, 'Post-Weight 2: ', ['class' => 'control-label col-sm-2']) !!}
                {!! Form::label($beaker->id, 'Run #:',['class' => 'control-label col-sm-2']) !!}
                {!! Form::label($beaker->id, 'Description:', ['class' => 'control-label col-sm-2']) !!}
                  <div class ="col-sm-2">
                    {!! Form::text($beaker->id.'[]', $beaker->pre_weight_1, ['class' => 'form-control']) !!}
                  </div>
                  <div class ="col-sm-2">
                    {!! Form::text($beaker->id.'[]', $beaker->pre_weight_2, ['class' => 'form-control']) !!}
                  </div>
                  <div class ="col-sm-2">
                    {!! Form::text($beaker->id.'[]', $beaker->post_weight_1, ['class' => 'form-control']) !!}
                  </div>
                  <div class ="col-sm-2">
                    {!! Form::text($beaker->id.'[]', $beaker->post_weight_2, ['class' => 'form-control']) !!}
                  </div>
                  <div class ="col-sm-2">
                    {!! Form::text($beaker->id.'[]', $beaker->runNumber, ['class' => 'form-control']) !!}
                  </div>
                  <div class ="col-sm-2">
                    {!! Form::text($beaker->id.'[]', $beaker->description, ['class' => 'form-control']) !!}
                  </div>
                  <input type='hidden' value='{{$beaker->id}}' name="{{$beaker->id}}[]">
              </div>
              @endforeach
              <div class="form-group">
                <div class="col-sm-8 col-md-offset-2">
                    <button class="btn btn-block btn-primary" type="submit">Update Beaker Info</button>
                </div> 
              </div>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
</div>

@endsection