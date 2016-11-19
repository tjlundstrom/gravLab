<?php require("header.blade.php"); ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <form class="form-horizontal" method="post" action="client_info.php">
            <h3 class="panel-heading">Add a New Client</h3>
            <hr>
            <h4 class="col-md-offset-4"> Please Provide the Following Information</h4>
            <div class="form-group">
              <label class="col-sm-4 control-label">Company Name: </label>
              <div class="col-sm-6">
                <input class="form-control" placeholder="Company Name">
              </div>
            </div>
            <div class="form-group">
              <label for="comment" class="control-label col-sm-4">Company Address:</label>
              <div class="col-sm-6">
                <input class="form-control" placeholder="Company Address">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-4 control-label">City: </label>
              <div class="col-sm-6">
                <input class="form-control" placeholder="City">
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
              <label for="comment" class="control-label col-sm-4">Plant Phone Number:</label>
              <div class="col-sm-6">
                <input class="form-control" placeholder="123-456-7890">
              </div>
            </div>
            <div class="form-group">
              <label for="comment" class="control-label col-sm-4">Plant Contact Name:</label>
              <div class="col-sm-6">
                <input class="form-control" placeholder="Contact Name">
              </div>
            </div>
            <div class="form-group">
              <label for="comment" class="control-label col-sm-4">Plant Contact Phone Number:</label>
              <div class="col-sm-6">
                <input class="form-control" placeholder="123-456-7890">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-8 col-md-offset-2">
                  <a href="main.php"><button class="btn btn-block btn-primary" type="submit">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php require("footer.blade.php"); ?>