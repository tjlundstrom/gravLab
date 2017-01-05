{{ csrf_field() }}
  <h3 class="panel-heading">Units to be Tested:</h3>
  <hr>
  <h4 class="col-md-offset-4"> Please Select the Units you wish to Test</h4>
  {!! Form::label('clientUnit_id', 'Units To be Tested: ', ['class' => 'control-label col-sm-4']) !!}
  @foreach($clientUnits as $unit)
	<div class="form-group">
    <div class="col-sm-12 col-md-offset-2">
      <div class="checkbox col-sm-offset-2"> 
      {!! Form::checkbox( 'clientUnit_id[]' , $unit->id )!!} {{$unit->unitIdentifier}}
      </div>
      <div class="form-group">
        {!! Form::label('fuel', 'Fuel Type: ', ['class' => 'control-label col-sm-2']) !!}
        <div class='col-sm-2'>
        {!! Form::text('fuel[]', null, ['class' => 'form-control']) !!}
        </div>
      </div>
      <div class="form-group">
        {!! Form::label('load', 'Load: ', ['class' => 'control-label col-sm-2']) !!}
        <div class='col-sm-2'>
        {!! Form::text('load[]', null, ['class' => 'form-control']) !!}
        </div>
      </div>
    </div>
	</div>
  @endforeach
  <div class="form-group">
    <div class="col-sm-6">
      <input type='hidden' value='{{$job->id}}' name="job_id">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-8 col-md-offset-2">
        <button class="btn btn-block btn-primary" type="submit"><?=$submitButtonText; ?></button>
    </div> 
  </div>