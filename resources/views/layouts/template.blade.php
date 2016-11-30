<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .monty{
        font-family: "Montserrat";
      }
      .resize{
     max-width:75%;
     max-height:50%;
      } 
    </style>
  </head>
  <body>
  @section('header')
    <div class="container-fluid">
      <div class="row-fluid">
        <div class="col-md-3">
          <img class="resize" src="../images/gravLabLogo.png" alt="Airtox logo">
        </div>
        <div class="col-md-9">
          <div class="text-center"><h2>Welcome to <span class="monty">gravLab</span></h2></div>
          <div class="text-center"><h5>Gravimetric Analysis and Laboratory Mangement System</h5></div>
        </div>
      </div>
    </div>

    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">{{$_SESSION['job'] or "Go Get a Job!"}}</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Particulate <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="particulate.php">Search or Start New Job</a></li>
                <li><a href="balance_input_display.php">Daily Balance Calibration</a></li>
                <li><a href="balance_search_list.php">Search Balance Calibrations</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Clients <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/client">List all Clients</a></li>
                <li><a href="/client/create">Create New Client</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Beaker Management <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Add New Beakers</a></li>
                <li><a href="#">Add Beakers to a Unit</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Filter Management <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Add a Batch of Filters</a></li>
                <li><a href="#">Add Filters to a Job</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <?php $user = Auth::user()->name; ?>
            <p class="navbar-text">Welcome, {{$user or "User"}}</p>
              <a href="{{url('/logout')}}" onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                <button type="button" class="btn btn-primary navbar-btn">Sign Out</button>
              </a>
              <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  </div>
  @show

  @yield('content')
  </div>
  <!--Scripts here so the page loads faster -->
  <script src="http://code.jquery.com/jquery.js"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>