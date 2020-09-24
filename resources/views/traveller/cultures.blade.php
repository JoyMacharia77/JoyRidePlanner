
<html>
<style>
.map-container-5{
overflow:hidden;
padding-bottom:56.25%;
position:relative;
height:0;
}
.map-container-5 iframe{
left:0;
top:0;
height:80%;
width:80%;
position:absolute;
}
</style>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


 
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
<title>Cultures || Joyride Planner</title>


<body id="page-top" background="public\images\bg-01">

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
            <a class="nav-link js-scroll-trigger" href="/cultures">Explore cultures</a>

</li>
<li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="/emergency">Emergency?</a>

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
  <div class="container" >
  <h3 class="text-uppercase text-white font-weight-bold">Choose Location:</h3>
<div class="row">




<!--Grid row-->
<div class="row">

  <!--Grid column-->
  <div class="col-md-20 mb-20">

    <!--Card-->
    <div class="card card-cascade narrower justify-content-center">

    <div class="card-body">
                <div class="table-responsive">
                <table class="table">
                    <thead class="text-primary">
                        <th>ID</th>
                        <th>Continent</th>
                        <th>Country</th>
                        <th>City</th>
                    
                      
                    
                        <th>VIEW</th>
                      
</thead>
<tbody>



@foreach ($places as $data)


    <tr>
        <td>{{$data->id}}</td>
        <td>{{$data->continent}}</td>
        <td>{{$data->country }}</td>
        <td>{{$data->city }}</td>
     
    


        
        <td>
        <a href ="/role-editpsc/{{$data->id}}" class="btn btn-success">VIEW</a>
        </td>

        </form>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
</div>

    <!--/.Card-->

  </div>
  <!--Grid column-->


    </div>
    <!--/.Card-->

  </div>
  <!--Grid column-->

</div>
<!--Grid row-->
