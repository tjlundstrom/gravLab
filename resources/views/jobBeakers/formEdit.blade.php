{{ csrf_field() }}
  <h3 class="panel-heading">Job Management:</h3>
  <hr>
  <h4 class="col-md-offset-4"> Please Provide the Following Information</h4>
  @foreach($jobBeakers as $beaker)
  <div class="form-group">
    {!! Form::label('job_id', $beaker->prefix.$beaker->number, ['class' => 'control-label col-sm-4']) !!}
    <div class="col-sm-6">
      {!! Form::text('job_id', null, ['class' => 'form-control']) !!}
      {!! Form::text('job_id', null, ['class' => 'form-control']) !!}

    </div>
  </div>
  <div class="form-group">
    {!! Form::label('title', 'Job Title: ', ['class' => 'control-label col-sm-4']) !!} <div class="col-sm-6">
      {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>
  </div>
  <div class="form-group">
    {!! Form::label('description', 'Job Description: ', ['class' => 'control-label col-sm-4']) !!}
    <div class="col-sm-6">
      {!! Form::text('description', null, ['class' => 'form-control']) !!}
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-6">
      <input type='hidden' value='1' name="client_id">
    </div>
  </div>
  @endforeach
  <div class="form-group">
    <div class="col-sm-8 col-md-offset-2">
        <button class="btn btn-block btn-primary" type="submit"><?=$submitButtonText; ?></button>
    </div> 
  </div>