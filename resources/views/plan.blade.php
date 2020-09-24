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
          <li><a href="local.html">local travel</a></li>
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
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase text-white font-weight-bold">Lets plan your trip...</h1>
          <hr class="divider my-4">
        </div>
       

          <table>
   <tr>
      <td>
      <form>
      <div class="col-lg-8 align-self-baseline">
          <p class="text-white-75 font-weight-light mb-5">Entire details of your budget and desired Travel Scope</p>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Type of travel</label>
    <select class="form-control" id="Location">
    <option value="none" Disabled>Where to travel...</option>
      <option value="local">Travel Locally</option>
      <option value="long">Travel Long distance</option>
      <option value="international">Travel Internationally</option>
     
  
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Travel budget</label>
    <input type="text" class="form-control" id="Tbudget" >
  </div>
      </td>
      <td>
        
  <!-- Material unchecked disabled -->
  <p class="text-white-75 font-weight-light mb-5">Select services and events you'll want to take part in and enter your budget for them </p>

<b><u><p class="text-white-75 font-weight-light mb-5">Services: </p><b><u>

<div class="form-check">
<input type="checkbox" class="form-check-input" id="Accomodation" >
<label class="form-check-label" for="materialUncheckedDisabled2">Accomodation Services </label>
<input type="text" class="form-control" id="Abudget" >
</div>
<br>
<!-- Material checked disabled -->
<div class="form-check">
<input type="checkbox" class="form-check-input" id="photography" >
<label class="form-check-label" for="materialCheckedDisabled2">Photography Services</label>
<input type="text" class="form-control" id="pbudget" >
</div>
<br>
<div class="form-check">
<input type="checkbox" class="form-check-input" id="event" >
<label class="form-check-label" for="materialCheckedDisabled2">Event Planning Services</label>
<input type="text" class="form-control" id="ebudget" >
</div>
<br>

<div class="form-check">
<input type="checkbox" class="form-check-input" id="transport" >
<label class="form-check-label" for="materialCheckedDisabled2">Transport Services</label>
<input type="text" class="form-control" id="tbudget" >
</div>


</form>

      </td>
   </tr>
</table>

<div class="login100-form-bgbtn"></div>
                                <button class="login100-form-btn" type="submit" class="btn btn-primary">
                                    {{ __('Lets Go!') }}
                                </button>

        <!--  <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">let's go!!</a> -->
        </div>
      </div>
    </div>
  </header>


 
</body>

</html>
