$(document).ready(function(){

    var map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: -34.397, lng: 150.644},
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
       // if (status == google.maps.places.PlacesServiceStatus.OK) {
       //   for (var i = 0; i < results.length; i++) {
        //    var place = results[i];
        //    createMarker(results[i]);
       //   }
        }

});