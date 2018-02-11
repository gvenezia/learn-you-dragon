<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Local CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/and.css">

  </head>
  <body>
    <!-- Bootstrap Navbar ( https://getbootstrap.com/docs/4.0/components/navbar/#nav ) -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <a class="navbar-brand" href="#">Basic Circuitry for Kids!</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="Rules.html">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Games and Lessons
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="index.html">Simple Circuit</a>
              <a class="dropdown-item" href="not.html">"Not" Gate</a>
              <a class="dropdown-item" href="and.html">"And" Gate</a>
              <a class="dropdown-item" href="or.html">"Or" Gate</a>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Main content of the page  -->
    <div class="container-fluid">
      <br>
      <!-- Welcome text with explanation of the game or lesson -->
      <div class="alert alert-info text-center" role="alert">
        This is an 'AND' gate. It has two inputs and one output.<br> 
        If input1 <em>and</em> input2 have a current (green), then the output will have a current (green). <br>
        In all other cases, the output doesn't have a current (red).
      </div>

      <!-- Exercise Container -->
      <div class="exercise-container">
        <div id="and-input" class="row justify-content-center">
          <div class="col-xs-10 col-sm-8 col-md-6 col-lg-4 text-center">
            <button id="input-1-button" type="button" class="btn btn-danger" data-toggle="button" aria-pressed="false" autocomplete="off">
              Input 1 <span id="input-1-switch"></span> 
            </button>
            &emsp; <!-- tab between inputs -->
            <button id="input-2-button" type="button" class="btn btn-danger" data-toggle="button" aria-pressed="false" autocomplete="off">
              Input 2 <span id="input-2-switch"></span> 
            </button>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-xs-10 col-sm-8 col-md-6 col-lg-4 text-center">
            <img id="and-gate" class="img-fluid m-5" src="http://www.clker.com/cliparts/N/A/y/e/G/p/and-gate-hi.png" alt="'and' gate pic">            
          </div>
        </div>
        
        <div class="row justify-content-center">
          <div class="col-md-6 col-lg-4 text-center">
            <button id="and-output" type="button" class="btn" data-toggle="button" aria-pressed="false" autocomplete="off">
              Output
            </button>
          </div>
        </div>
      </div>

      <!-- Div for PHP code that will edit the file.txt, which the Arduino will read -->
      <div id="php-container">
        
      </div>
    
    </div> <!-- End page container -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Local JS -->
    <script src="assets/js/and.js" type="text/javascript"></script>
  </body>
</html>