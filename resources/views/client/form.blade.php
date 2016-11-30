{{ csrf_field() }}
  <h3 class="panel-heading">Client Management:</h3>
  <hr>
  <h4 class="col-md-offset-4"> Please Provide the Following Information</h4>
  <div class="form-group">
    {!! Form::label('clientName', 'Client Name: ', ['class' => 'control-label col-sm-4']) !!}
    <div class="col-sm-6">
      {!! Form::text('clientName', null, ['class' => 'form-control']) !!}
    </div>
  </div>
  <div class="form-group">
    {!! Form::label('address', 'Company Address: ', ['class' => 'control-label col-sm-4']) !!}
    <div class="col-sm-6">
      {!! Form::text('address', null, ['class' => 'form-control']) !!}
    </div>
  </div>
  <div class="form-group">
    {!! Form::label('city', 'City: ', ['class' => 'control-label col-sm-4']) !!}
    <div class="col-sm-6">
      {!! Form::text('city', null, ['class' => 'form-control']) !!}
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-4 control-label">State: </label>
    <div class="col-sm-6">
      <select class="form-control" id="form-state" name="state">
        <option value="AL">Alabama</option>
        <option value="AK">Alaska</option>
        <option value="AZ">Arizona</option>
        <option value="AR">Arkansas</option>
        <option value="CA">California</option>
        <option value="CO">Colorado</option>
        <option value="CT">Connecticut</option>
        <option value="DE">Delaware</option>
        <option value="DC">District Of Columbia</option>
        <option value="FL">Florida</option>
        <option value="GA">Georgia</option>
        <option value="HI">Hawaii</option>
        <option value="ID">Idaho</option>
        <option value="IL">Illinois</option>
        <option value="IN">Indiana</option>
        <option value="IA">Iowa</option>
        <option value="KS">Kansas</option>
        <option value="KY">Kentucky</option>
        <option value="LA">Louisiana</option>
        <option value="ME">Maine</option>
        <option value="MD">Maryland</option>
        <option value="MA">Massachusetts</option>
        <option value="MI">Michigan</option>
        <option value="MN">Minnesota</option>
        <option value="MS">Mississippi</option>
        <option value="MO">Missouri</option>
        <option value="MT">Montana</option>
        <option value="NE">Nebraska</option>
        <option value="NV">Nevada</option>
        <option value="NH">New Hampshire</option>
        <option value="NJ">New Jersey</option>
        <option value="NM">New Mexico</option>
        <option value="NY">New York</option>
        <option value="NC">North Carolina</option>
        <option value="ND">North Dakota</option>
        <option value="OH">Ohio</option>
        <option value="OK">Oklahoma</option>
        <option value="OR">Oregon</option>
        <option value="PA">Pennsylvania</option>
        <option value="RI">Rhode Island</option>
        <option value="SC">South Carolina</option>
        <option value="SD">South Dakota</option>
        <option value="TN">Tennessee</option>
        <option value="TX">Texas</option>
        <option value="UT">Utah</option>
        <option value="VT">Vermont</option>
        <option value="VA">Virginia</option>
        <option value="WA">Washington</option>
        <option value="WV">West Virginia</option>
        <option value="WI">Wisconsin</option>
        <option value="WY">Wyoming</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    {!! Form::label('phoneNumber', 'Plant Phone Number: ', ['class' => 'control-label col-sm-4']) !!}
    <div class="col-sm-6">
      {!! Form::text('phoneNumber', null, ['class' => 'form-control']) !!}
    </div>
  </div>
  <div class="form-group">
    {!! Form::label('contactName', 'Contact Name: ', ['class' => 'control-label col-sm-4']) !!}
    <div class="col-sm-6">
      {!! Form::text('contactName', null, ['class' => 'form-control']) !!}
    </div>
  </div>
  <div class="form-group">
    {!! Form::label('contactPhoneNumber', 'Contact Phone Number: ', ['class' => 'control-label col-sm-4']) !!}
    <div class="col-sm-6">
      {!! Form::text('contactPhoneNumber', null, ['class' => 'form-control']) !!}
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-8 col-md-offset-2">
        <a href="main.php"><button class="btn btn-block btn-primary" type="submit"><?=$submitButtonText; ?></button></a>
    </div>
  </div>