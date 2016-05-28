var m=new Array();
function coor(){
  $.ajax({
              type:'post',
              url:'../controller/restauranteController.php',
              dataType:'json',
              data:"accion=buscar",
              success:function(html)
              { 
                mapas(html);
              }
            });

}
function mapas(m) {
  nm=m.length;
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
            var post = {
              lat: position.coords.latitude+0.00033,
              lng: position.coords.longitude,
            };
            var image = '../public/img/yo2.png';
                  var beachMarker = new google.maps.Marker({
                    position:pos,
                    map: map,
                    icon: image
                  });
             var mark = '../public/img/ico2.png';
            for (var i = 0; i < nm; i++) {
                  var beachMarker = new google.maps.Marker({
                    position:{lat: parseFloat(m[i][3]), lng: parseFloat(m[i][4])},
                    map: map,
                    icon: mark
                  });
                  console.log(beachMarker);
            }
            infoWindow.setPosition(post);
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