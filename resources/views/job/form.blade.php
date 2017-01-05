{{ csrf_field() }}
  <h3 class="panel-heading">Job Management:</h3>
  <hr>
  <h4 class="col-md-offset-4"> Please Provide the Following Information</h4>
  <div class="form-group">
    {!! Form::label('number', 'Job Number: ', ['class' => 'control-label col-sm-4']) !!}
    <div class="col-sm-6">
      {!! Form::text('number', null, ['class' => 'form-control']) !!}
    </div>
	</div>
	<div class="form-group">
    {!! Form::label('title', 'Job Title: ', ['class' => 'control-label col-sm-4']) !!} <div class="col-sm-6">
      {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>
	</div>
	<div class="form-group">
    {!! Form::label('type', 'Type of Job: ', ['class' => 'control-label col-sm-4']) !!}
    <div class="col-sm-8">
      <div class=" radio-inline">
        <label class="radio-inline"> 
        {!! Form::radio('type', 'm5', false) !!} Method 5
        </label>
      </div>
      <div class=" radio-inline">
        <label class="radio-inline"> 
        {!! Form::radio('type', 'm29', false) !!} Method 29
        </label>
      </div>
      <div class=" radio-inline">
        <label class="radio-inline"> 
        {!! Form::radio('type', 'm202', false) !!} Method 202
        </label>
      </div>
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
      <input type='hidden' value='{{$client->id}}' name="client_id">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-8 col-md-offset-2">
        <button class="btn btn-block btn-primary" type="submit"><?=$submitButtonText; ?></button>
    </div> 
  </div>