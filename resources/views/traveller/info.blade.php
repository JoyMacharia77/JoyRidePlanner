<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Joyride Planner || loaction details</title>

 
  <!-- Font Awesome Icons -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

  <!-- Plugin CSS -->
  <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Theme CSS - Includes Bootstrap -->
  <link href="css/creative.min.css" rel="stylesheet">





</head>

<body id="page-top">


  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
    
      <a class="navbar-brand js-scroll-trigger" href="#page-top">JOYRIDE PLANNER</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Services</a>
          </li>

          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Menu <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="/all">local travel</a></li>
          <li><a href="/Longd">Long Distance</a></li>
          <li><a href="/international">International </a></li>
          <li><a href="/search">search destination</a></li>
        </ul>
      </li>




          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="/profile">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">About Us</a>

</li>
<li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact Us</a>

</li>


            <li class="nav-item">
             <a class="nav-link js-scroll-trigger" href="/register"> Sign Out</a></li>
             @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
        </ul>
      </div>
    </div>
  </nav>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">


             <img class="card-img-top" src="/storage/uploads/{{$all->picture}}" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">{{$all->place}}</a>
                </h4>
                <h5>Estimated price: {{$all->currency}} {{$all->estimatedP}}</h5>
               
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
           
          </div>



<h4 class="card-title"> Description for : {{$all->description}}</h4>
 
<footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Joyride Planner 2019</p>
    </div>-->
    <!-- /.container -->
 </footer> 

  <!-- 
  <script src="vendor/jquery/jquery.min.js"></script>-->
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
