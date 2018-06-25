
    <script>

    function createMarker(posn, title, map, html, infoWindow) {
      	var marker = new google.maps.Marker({ position: posn, map: map, title: title});
    	marker['content'] = html;
    	marker.addListener('click', function() {
    		infoWindow.setContent(this['content']);
          	infoWindow.open(map, marker);
        });

    return marker;
}

	function getMapOptions(c){
        return {
          zoom: 15,
          center: c.pos
        };
    }

      function initMap() {
      	var infoWindow = new google.maps.InfoWindow();

      	var uvt = {name: "West University of Timișoara", pos: {lat: 45.7471192 , lng: 21.2316148 }};
      	var upt = {name: "Universitatea Politehnica Timisoara", pos: {lat: 45.753954 , lng: 21.225356 }};
      	var usamvb = {name: "Universitatea de Științe Agricole și Medicină Veterinară a Banatului din Timișoara", pos: {lat: 45.7828102 , lng: 21.2156934 }};
      	var umft = {name: "Universitatea de Medicină și Farmacie „Victor Babeș” din Timișoara", pos: {lat: 45.7572315 , lng: 21.2365832 }};


        var mapUVT = new google.maps.Map(document.getElementById('mapUVT'), getMapOptions(uvt));
        var mapUPT = new google.maps.Map(document.getElementById('mapUPT'), getMapOptions(upt));
        var mapUSAMVB = new google.maps.Map(document.getElementById('mapUSAMVB'), getMapOptions(usamvb));
        var mapUMFT = new google.maps.Map(document.getElementById('mapUMFT'), getMapOptions(umft));

        stringContent = [];
        stringContent[0] = '<div id="uvt">'+
            '<h1>Universitatea de Vest</h1>'+
            '<p><b>Înființare:</b> 1944 '+
			'<p><b>Motto:</b> <em>Promovăm cariere, creăm caractere!</em></p>'+
            '<p><b>Adresă:</b> Bulevardul Vasile Pârvan 4, Timișoara 300223 ' +
            '<p><b>Telefon:</b> <a href="tel:+400256592111">40-(0)256-592111</a> '+
            '</div>';

        stringContent[1] = '<div id="upt">'+
            '<h1>Universitatea Politehnica Timișoara</h1>'+
            '<p><b>Înființare:</b> 1920 '+
			'<p><b>Motto:</b> <em>Nu zidurile fac o școală, ci spiritul care domnește într’însa.</em></p>'+
            '<p><b>Adresă:</b> Piața Victoriei 2, Timișoara 300006 ' +
            '<p><b>Telefon:</b> <a href="tel:+40256403000">40-(0)256-403000</a> '+
            '</div>';

        stringContent[2] = '<div id="usamvb">'+
            '<h1>Universitatea de Științe Agricole și Medicină Veterinară a Banatului</h1>'+
            '<p><b>Înființare:</b> 1991 '+
            '<p><b>Adresă:</b> Calea Aradului 119, Timișoara 300645 ' +
            '<p><b>Telefon:</b> <a href="tel:+40256277001">40-(0)256-277001</a> '+
            '</div>';

        stringContent[3] = '<div id="umft">'+
            '<h1>Universitatea de Medicină și Farmacie „Victor Babeș”</h1>'+
            '<p><b>Înființare:</b> 1945 '+
            '<p><b>Adresă:</b> Piața Eftimie Murgu 2, Timișoara 300041 ' +
            '<p><b>Telefon:</b> <a href="tel:+40256204400">40-(0)256-204400</a> '+
            '</div>';

       	createMarker(uvt.pos, uvt.name, mapUVT, stringContent[0], infoWindow);
       	createMarker(upt.pos, upt.name, mapUPT, stringContent[1], infoWindow);
       	createMarker(usamvb.pos, usamvb.name, mapUSAMVB, stringContent[2], infoWindow);
       	createMarker(umft.pos, umft.name, mapUMFT, stringContent[3], infoWindow);
       }

    </script>
    <script 
    async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZxWOnXpB0HDn-6cEbwJcnHbw6uq3jXM8&libraries=visualization&callback=initMap">
    </script>