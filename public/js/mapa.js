function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 16
        });
        var infoWindow = new google.maps.InfoWindow({map: map});

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude,
            };
            var pos2 = {
              lat: position.coords.latitude+0.00033,
              lng: position.coords.longitude,
            };
            var pos3 = {
              lat: position.coords.latitude+0.0009,
              lng: position.coords.longitude,
            };

              var image = '../public/img/yo2.png';
                  var beachMarker = new google.maps.Marker({
                    position:pos,
                    map: map,
                    icon: image
                  });
              var image2 = '../public/img/ico2.png';
                  var beachMarker = new google.maps.Marker({
                    position:pos3,
                    map: map,
                    icon: image2
                  });

            infoWindow.setPosition(pos2);
            infoWindow.setContent('Aqui estas!.');
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
      }