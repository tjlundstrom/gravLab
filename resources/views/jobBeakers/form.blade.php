{{ csrf_field() }}
  <h3 class="panel-heading">Job Management:</h3>
  <hr>
  <h4 class="col-md-offset-4"> Please Provide the Following Information</h4>
	<div class="form-group">
    {!! Form::label('type', 'Unit to Add Beakers to: ', ['class' => 'control-label col-sm-4']) !!}
    <div class="col-sm-8">
    <!-- Radios for Units in the job -->
    @foreach($units as $unit)
      <div class=" radio-inline">
        <label class="radio-inline"> 
        {!! Form::radio('unit',$unit->id , false) !!} {{$unit->clientUnit->unitIdentifier}}
        </label>
      </div>
    @endforeach

    <hr>
    <!-- Tabs for the Different types of Beakers to select -->
    <div role="navigation">
      <ul class="nav nav-pills nav-justified">
        <li role="presentation" >
        <a href="#250" aria-controls="250" role="pill" data-toggle="pill">250 mL Beakers</a>
        </li>
        <li role="presentation" >
        <a href="#400" aria-controls="400" role="pill" data-toggle="pill">400 mL Beakers</a>
        </li>
        <li role="presentation" >
        <a href="#500" aria-controls="500" role="pill" data-toggle="pill">500 mL Beakers</a>
        </li>
        <li role="presentation" >
        <a href="#CS150" aria-controls="CS150" role="pill" data-toggle="pill">CS150 mL Beakers</a>
        </li>
      </ul>

      <br>

      <div class="tab-content">
        <div role="tabpanel" class="tab-pane" id="250">
        <h4>Beakers:</h4>
          @foreach($beakers as $beaker)
            @if ($beaker->size == 250)
              <div class=" checkbox">
                <label class="checkbox"> 
                {!! Form::checkbox('beakers[]',$beaker->id , false) !!} {{$beaker->id}}
                </label>
              </div>
            @endif
          @endforeach
        </div>
        <div role="tabpanel" class="tab-pane" id="400">
          <h4>Beakers:</h4>
          @foreach($beakers as $beaker)
            @if ($beaker->size == 400)
              <div class=" checkbox">
                <label class="checkbox"> 
                {!! Form::checkbox('beakers[]',$beaker->id , false) !!} {{$beaker->id}}
                </label>
              </div>
            @endif
          @endforeach
        </div>
        <div role="tabpanel" class="tab-pane" id="500">
          <h4>Beakers:</h4>
          @foreach($beakers as $beaker)
            @if ($beaker->size == 500)
              <div class=" checkbox">
                <label class="checkbox"> 
                {!! Form::checkbox('beakers[]',$beaker->id , false) !!} {{$beaker->id}}
                </label>
              </div>
            @endif
          @endforeach
        </div>
        <div role="tabpanel" class="tab-pane" id="CS150">
          <h4>Beakers:</h4>
          @foreach($beakers as $beaker)
            @if ($beaker->size == 150)
              <div class=" checkbox">
                <label class="checkbox"> 
                {!! Form::checkbox('beakers[]',$beaker->prefix.$beaker->id , false) !!} {{$beaker->prefix}}{{$beaker->id}}
                </label>
              </div>
            @endif
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
<div class="form-group">
    <div class="col-sm-6">
      <input type='hidden' value='{{$job_id}}' name="job_id">
    </div>
  </div>
<div class="form-group">
  <div class="col-sm-8 col-md-offset-2">
      <button class="btn btn-block btn-primary" type="submit"><?=$submitButtonText; ?></button>
  </div> 
</div>
