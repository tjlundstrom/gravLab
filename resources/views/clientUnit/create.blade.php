@extends('layouts.template')

@section('title', 'Client Creation')

@section('header')
    @parent
@endsection

@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <form class="form-horizontal" method="post" action="/clientUnit">
            @include('clientUnit.form', ['submitButtonText' => 'Add New Unit'])
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection