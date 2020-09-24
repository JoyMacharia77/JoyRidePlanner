<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Local Distance Travel || Joyride Planner</title>

</meta>
<link rel="stylesheet" href="{{asset('css/main.css')}}">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"></link>
</head>
<body>                                          

@yield('content')

<script crossorigin ="anonymous" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU58gtiJj06wt/s=" src="https://code.jquery.com/jquery-3.1.0.min.js">
</script>








 <div id="map"></div>
    <script>

      var map;
      function initMap() {
       var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 24.397, lng: 80.644},
          scrollwheel: false,
          zoom: 8
        });

        var request = {
        location: {lat: 24.397, lng: 80.644},
        radius: '500',
        type: ['store']
      };



        service = new google.maps.places.PlacesService(map);
service.nearbySearch(request, callback);


function callback(results, status) {
    console.log(results);    

 /* if (status == google.maps.places.PlacesServiceStatus.OK) {
    for (var i = 0; i < results.length; i++) {
      var place = results[i];
      createMarker(results[i]);
    }
  }
*/

      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD5dISG5ut9ifGohT40VOXkvG3G1YDMgzI &libraries=places"></script>



<script src="{{asset('js/script.js')}}"></script>   

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
</script>

</body>
</html>
