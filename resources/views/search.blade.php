<html lang="en">
<!--
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<head>
  <title>User Profile||Joyride Planner</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
-->
  




<head>

<title>User Profile||Joyride Planner</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <meta charset="utf-8">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


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
          <li><a href="longD.html">Long Distance</a></li>
          <li><a href="international.html">International </a></li>
          <li><a href="/search">search destination</a></li>
        </ul>
      </li>




          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">About Us</a>

</li>
<li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact Us</a>

</li>


            <li class="nav-item">
             <a class="nav-link js-scroll-trigger" href="/register"> Sign Out</a></li>
            <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="/login"> Login</a></li>
          </li>
        </ul>
      </div>
    </div>
  </nav>
 <!-- Masthead -->
 <header class="masthead">
    
      

</head>


<hr>
<div class="container bootstrap snippet">
    <div class="row">
  	
    	
    </div>
    <div class="row">
  		<div class="col-sm-3"><!--left col-->
              

      <div class="text-center">
        <img src="img/man.png" class="avatar img-circle img-thumbnail" alt="Your profile image"><br>
<br><br>
       
<form action="/save-profile" method="POST">
{{csrf_field() }}



<div class="form-group">
       
            <input type="file" name="picture" class="text-center center-block file-upload" id="recipient-name" >
          </div>
        
      </div>

      </form>



        <h6>Change or Upload a photo...</h6>
       
             
        </div><!--/col-3-->
    	<div class="col-sm-9">
            <ul class="nav nav-tabs">
                <li class="active"><a href="/profile">User Information</a></li>
                <li><a href="/moreD">More Details</a></li>
                <li><a href="/experiences">Share Experiences </a></li>
              </ul>

              
          <div class="tab-content">
            <div class="tab-pane active" id="profile">
                <hr>
                  
                <div class="row">
          <div class="col-md-12">
          
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> User Profile for : {{Auth::user()->name}}</h4>


                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
              </div>
              <div class="card-body">
              <ul class="list-group">
              

  <li class="list-group-item">User ID : {{Auth::user()->id}}</li>
  <li class="list-group-item">User Name : {{Auth::user()->name}}</li>
  <li class="list-group-item">Phone : {{Auth::user()->phone}}</li>
  <li class="list-group-item">Usertype : {{Auth::user()->usertype}}</li>
  <li class="list-group-item">Email : {{Auth::user()->email}}</li>

</ul>

<a href="/role-edit/{{Auth::user()->id}}" class="btn btn-success">EDIT</a>


</div>
</div>
</div>
</div>



</div>
</div>

