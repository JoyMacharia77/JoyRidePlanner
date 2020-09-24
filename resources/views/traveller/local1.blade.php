
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Joyride Planner</title>

 
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

<body id="page-top" background-color=#C0C0C0>

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
          <li><a href="longD.html">Long Distance</a></li>
          <li><a href="international.html">International </a></li>
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

  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
   

  <!-- Page Content -->
  <div class="container">
  <h3 class="text-uppercase text-white font-weight-bold">Lets Plan Your Local Adventure</h3>
<div class="row">

  <div class="col-lg-3">

   <br><br><br>
    <div class="list-group">
      <a href="#" class="list-group-item">Events NearBy</a>
      <a href="#" class="list-group-item">Activities & Services </a>
      <a href="#" class="list-group-item">Accomodation</a>
      <a href="#" class="list-group-item">Dining</a>
    </div>
    <br>
    <br>
    <br>


<p>


<h5 class="text-uppercase text-white font-weight-bold">Enter budget:</h5>

<form action="/all" method="get">
<div class="input-group">

<input type="int" name="search" class="input-control"/>

<span class ="input-group-prepend">
<button type="submit" class="btn btn-primary">Submit</button>
</span>
</div>
</form>



</p>



  </div>
  <!-- /.col-lg-3 -->
<br><br>
  <div class="col-lg-9">

    <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
@foreach ($all->take(3) as $data)

        <div class="carousel-item  @if($loop->first) active @endif">
          <img class="d-block img-fluid" src="/storage/uploads/{{$data->picture}}" alt="First slide">
        </div>
        @endforeach
</div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

      
      </div>
    </div>
  </header>
  <h4 style="text-align:center" class="text-uppercase text-black font-weight-bold">Available Destinations:</h4>
  <header class="masthead">
    <div class="container h-100">
    
      <div class="row h-100 align-items-center justify-content-center text-center">
     
        <div class="row">
         

          <div class="col-lg-3 col-md-6 mb-4">
            <div class="card h-100">


              <a href="/info/{{$all->id}}"><img class="card-img-top" src="/storage/uploads/{{$all->picture}}" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">{{$all->place}}</a>
                </h4>
                <h5>Estimated price: {{$all->currency}} {{$all->estimatedP}}</h5>
               <!-- <p class="card-text">{{$data->description}}</p> -->
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
           
          </div>
       
</div>
</header>
  <!-- /.container -->

  <!-- Footer -->

  </div>
  </div>
  </div>
  
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

