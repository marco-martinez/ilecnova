function initialize() {
          var myLatlng = new google.maps.LatLng(20.6705886,-87.0722743);
          var mapOptions = {
            zoom: 14,
            center: myLatlng,
            mapTypeId: google.maps.MapTypeId.HYBRID 
          }
          var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

            var contentString = '<div id="content">'+
              '<div id="siteNotice">'+
              '</div>'+
              '<h3 id="firstHeading" class="firstHeading">Oficinas Ilecnova</h3>'+
              '<div id="bodyContent">'+
              '<p><b>Desarrollo de proyectos de energía renovable</b>' +
              '<p>Reg. XX, SM XX, MZ XX, LT. XX, C. de las torres, '+
              'Col. Cataluña II, CP. 77710, Playa del Carmen, Q. Roo'+
              '</div>'+
              '</div>';

          var infowindow = new google.maps.InfoWindow({
              content: contentString,
              maxWidth: 200
          });

          var marker = new google.maps.Marker({
              position: myLatlng,
              map: map,
              title: 'Oficinas ilecnova'
          });

          google.maps.event.addListener(marker, 'click', function() {
            infowindow.open(map,marker);
          });
        }

        google.maps.event.addDomListener(window, 'load', initialize);
