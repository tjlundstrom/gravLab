{{ csrf_field() }}
  <h3 class="panel-heading">Unit Management:</h3>
  <hr>
  <h4 class="col-md-offset-4"> Please Provide the Following Information</h4>
  <div class="form-group">
    {!! Form::label('unitIdentifier', 'Unit Identifier: ', ['class' => 'control-label col-sm-4']) !!}
    <div class="col-sm-6">
      {!! Form::text('unitIdentifier', null, ['class' => 'form-control']) !!}
    </div>
	</div>
	<div class="form-group">
    {!! Form::label('unitModel', 'Unit Model: ', ['class' => 'control-label col-sm-4']) !!}
    <div class="col-sm-6">
      {!! Form::text('unitModel', null, ['class' => 'form-control']) !!}
    </div>
	</div>
	<div class="form-group">
    {!! Form::label('permitNumber', 'Permit Number: ', ['class' => 'control-label col-sm-4']) !!}
    <div class="col-sm-6">
      {!! Form::text('permitNumber', null, ['class' => 'form-control']) !!}
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