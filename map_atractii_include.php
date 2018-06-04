<div id="map" style="height:100%; width:100%; display:inline-block;"></div>
<div id="floating-panel">
<?php 

	switch($var) {
    	case "Cladiri": 
        		include_once "includes/map-trasee/cladiri.php";
        		break;
    	case "Monumente":
       			include_once "includes/map-trasee/monumente.php";
        		break;
    		case "Muzee":
       			include_once "includes/map-trasee/muzee.php";
        		break;
        	case "Palate":
       			include_once "includes/map-trasee/palate.php";
        		break;
        	case "Parcuri":
       			include_once "includes/map-trasee/parcuri.php";
       			break;
        	case "Piete":
       			include_once "includes/map-trasee/piete.php";
        		break;
        	case "Lacasuri":
       			include_once "includes/map-trasee/lacasuri.php";
        		break;
        	case "Poduri":
       			include_once "includes/map-trasee/poduri.php";
        		break;
        	default: echo 'nu exista traseu';
        }

?>
</div>
<div id="right-panel"></div>
<div id="map_traseu" style="height:100%;"></div>

<script>

    var whichMap = "<?php echo $var; ?>";
   
    var arrayCladiri = [{name: "Castelul Huniade", pos: {lat: 45.7530631 , lng: 21.2270846 }} ,
			{name: "Abatorul", pos: {lat: 45.7476982 , lng: 21.2423182 }} ,
			{name: "Clădirea Operei şi a Teatrului Naţional", pos: {lat: 45.754199 , lng: 21.225894 }} ,
			{name: "Turnul de apă", pos: {lat: 45.7659038 , lng: 21.251016 }} ,
			{name: "Bastionul Theresia", pos: {lat: 45.7572585 , lng: 21.2339618 }} ,
			{name: "Cazinoul Militar", pos: {lat: 45.7557831 , lng: 21.2263045 }} ,
			{name: "Fabrica de bere", pos: {lat: 45.753025 , lng: 21.25021 }} ,
			{name: "Hidrocentrala", pos: {lat: 45.7579717 , lng: 21.2649179 }}
		];

	var arrayMonumente = [{name: "Coloana Ciumei", pos: {lat: 45.7579329 , lng: 21.2290738 }} ,
			{name: "Monumentul Sfintei Maria şi a Sfântului Nepomuk", pos: {lat: 45.7557855 , lng: 21.2272779 }} ,
			{name: "Statuia Lupoaicei", pos: {lat: 45.7524432 , lng: 21.2251098 }} ,
			{name: "Monumentul Fecioara Maria", pos: {lat: 45.7483004 , lng: 21.218816 }}
		];

	var arrayMuzee = [{name: "Muzeul de Artă", pos: {lat: 45.7640357 , lng: 21.2224705 }} ,
			{name: "Muzeul Militar", pos: {lat: 45.7551367 , lng: 21.2273093 }} ,
			{name: "Muzeul Satului Bănățean", pos: {lat: 45.779534 , lng: 21.263727 }} ,
			{name: "Muzeul din subsolul Catedralei Mitropolitane", pos: {lat: 45.7507216 , lng: 21.2242708 }} ,
			{name: "Muzeul de artă bisericească al Episcopiei Ortodoxe Sârbe", pos: {lat: 45.7640357 , lng: 21.2224705 }} ,
			{name: "Muzeul Kindlein", pos: {lat: 45.7572884 , lng: 21.2282789 }} ,
			{name: "Galeria Calina", pos: {lat: 45.754543 , lng: 21.225414 }} ,
			{name: "Asociația Memorialul Revoluției", pos: {lat: 45.759708 , lng: 21.231626 }}
		];

	var arrayPalate = [{name: "﻿Palatul Bruck", pos: {lat: 45.7574831 , lng: 21.2288064 }} ,
			{name: "Palatul Dicasterial", pos: {lat: 45.7570104 , lng: 21.2313452 }} ,
			{name: "Palatul Lloyd", pos: {lat: 45.7536332 , lng: 21.2250684 }} ,
			{name: "Palatul Apelor", pos: {lat: 45.7492406 , lng: 21.2195174 }} ,
			{name: "Palatul Dejan", pos: {lat: 45.7560435 , lng: 21.231342 }} ,
			{name: "Palatul Dauerbach", pos: {lat: 45.7526209 , lng: 21.2246531 }} ,
			{name: "Palatul Weiss", pos: {lat: 45.7540346 , lng: 21.2249458 }} ,
			{name: "Palatul Széchenyi", pos: {lat: 45.75166 , lng: 21.2240217 }} ,
			{name: "Palatul Hilt-Vogel", pos: {lat: 45.7519768 , lng: 21.2243829 }} ,
			{name: "Palatul Löffler", pos: {lat: 45.7531814 , lng: 21.2259519 }} ,
			{name: "Palatul Merbl", pos: {lat: 45.7531066 , lng: 21.2247427 }} ,
			{name: "Palatul Neuhausz", pos: {lat: 45.7532844 , lng: 21.2248233 }} ,
			{name: "Palatul Neptun", pos: {lat: 45.7565464 , lng: 21.2419581 }} ,
			{name: "Palatul Mercur", pos: {lat: 45.7580596 , lng: 21.2495621 }} ,
			{name: "Casa Mercy", pos: {lat: 45.7559607 , lng: 21.23179 }} ,
			{name: "Palatul Bancii Nationale", pos: {lat: 45.7488716 , lng: 21.2086793 }} ,
			{name: "Palatul Emmer", pos: {lat: 45.7571013 , lng: 21.2287297 }} ,
			{name: "Palatul Marschall", pos: {lat: 45.7491241 , lng: 21.220139 }} ,
			{name: "Palatul Ancorei", pos: {lat: 45.7471195 , lng: 21.210202 }}
		];

	var arrayParcuri = [{name: "Parcul Carmen Sylva", pos: {lat: 45.7444998 , lng: 21.2232346 }} ,
			{name: "Parcul Rozelor", pos: {lat: 45.7500944 , lng: 21.2316826 }} ,
			{name: "Parcul Botanic", pos: {lat: 45.7601963 , lng: 21.2253015 }} ,
			{name: "Parcul Copiilor Ion Creangă", pos: {lat: 45.7529397 , lng: 21.2371609 }} ,
			{name: "Parcul Civic", pos: {lat: 45.7540275 , lng: 21.2315595 }} ,
			{name: "Parcul Lidia", pos: {lat: 45.7328841 , lng: 21.2432055 }} ,
			{name: "Parcul Regina Maria", pos: {lat: 45.755693 , lng: 21.2425021 }} ,
			{name: "Parcul Catedralei", pos: {lat: 45.7498403 , lng: 21.2239852 }} ,
			{name: "Parcul din Piața Plevnei", pos: {lat: 45.7500944 , lng: 21.2316826 }} ,
			{name: "Pădure verde", pos: {lat: 45.780901 , lng: 21.266995 }}
		];

	var arrayPiete = [{name: "Piața Victoriei", pos: {lat: 45.7525195 , lng: 21.2248242 }} ,
			{name: "Piața Unirii", pos: {lat: 45.7583935 , lng: 21.22904 }} ,
			{name: "Piața Libertății", pos: {lat: 45.7555936 , lng: 21.2269221 }} ,
			{name: "Piața Maria", pos: {lat: 45.7487992 , lng: 21.2191219 }} ,
			{name: "Piața Traian", pos: {lat: 45.7574624 , lng: 21.249785 }} ,
			{name: "Piața 700", pos: {lat: 45.7572279 , lng: 21.2226498 }} ,
			{name: "Piața Sfântul Gheorghe", pos: {lat: 45.7557908 , lng: 21.2288231 }} ,
			{name: "Piața Plevnei", pos: {lat: 45.7479579 , lng: 21.221281 }} ,
			{name: "Piața Alexandru Mocioni", pos: {lat: 45.7465367 , lng: 21.2158162 }}
		];

	var arrayLacasuri = [{name: "Domul Romano-Catolic", pos: {lat: 45.7581453 , lng: 21.2300941 }} ,
			{name: "Catedrala Mitropolitană", pos: {lat: 45.7507216 , lng: 21.2242708 }} ,
			{name: "Biserica ortodoxă din Iosefin", pos: {lat: 45.7460839 , lng: 21.2164676 }} ,
			{name: "Biserica Millennium", pos: {lat: 45.7566806 , lng: 21.2477854 }} ,
			{name: "Biserica Notre Dame", pos: {lat: 45.7438061 , lng: 21.2127197 }} ,
			{name: "Biserica Preasfântă Inimă a lui Isus", pos: {lat: 45.7413261 , lng: 21.2262937 }} ,
			{name: "Biserica Ortodoxă Sârbă Fabric", pos: {lat: 45.7577029 , lng: 21.2507827 }} ,
			{name: "Biserica călugărilor mizericordieni", pos: {lat: 45.755632 , lng: 21.2246906 }} ,
			{name: "Biserica Piariștilor", pos: {lat: 45.7521952 , lng: 21.222885 }} ,
			{name: "Sinagoga Cetate", pos: {lat: 45.7564716 , lng: 21.2259749 }} ,
			{name: "Biserica „Nașterea Sfintei Fecioare Maria”", pos: {lat: 45.7447067 , lng: 21.2112093 }} ,
			{name: "Biserica Reformată", pos: {lat: 45.7481357 , lng: 21.2184834 }} ,
			{name: "Biserica Nașterea Maicii Domnului", pos: {lat: 45.7460839 , lng: 21.2164676 }}
		];

	var arrayPoduri = [{name: "Pasarela de la Uzina Hidroelectrică", pos: {lat: 45.7580631 , lng: 21.26516 }} ,
			{name: "Podul Andrei Șaguna", pos: {lat: 45.7486592 , lng: 21.2254587 }} ,
			{name: "Podul Decebal", pos: {lat: 45.7560746 , lng: 21.2409611 }} ,
			{name: "Podul Traian", pos: {lat: 45.7497206 , lng: 21.2209141 }} ,
			{name: "Pasarela îndrăgostiților", pos: {lat: 45.7543923 , lng: 21.2398748 }} ,
			{name: "Podul Michelangelo", pos: {lat: 45.7503479 , lng: 21.2346531 }} ,
			{name: "Podul Mihai Viteazu", pos: {lat: 45.7599588 , lng: 21.258903 }} ,
			{name: "Podul Metalic", pos: {lat: 45.7490636 , lng: 21.2145765 }} ,
			{name: "Podul General Ioan Dragalina", pos: {lat: 45.7466161 , lng: 21.2103327 }} ,
			{name: "Podul Eroilor", pos: {lat: 45.7466246 , lng: 21.2074133 }} ,
			{name: "Podul Iuliu Maniu", pos: {lat: 45.7458716 , lng: 21.205131 }} ,
			{name: "Pasarela Gelu", pos: {lat: 45.7440749 , lng: 21.1996889 }}
		];

	var arrayLocatii = getArrayLocatii(whichMap);

	function getArrayLocatii(whichMap){
		switch(whichMap) {
    		case "Cladiri":
        		arrayLocatii = arrayCladiri.slice();
        		console.log(whichMap, arrayLocatii);
        		break;
    		case "Monumente":
       			arrayLocatii = arrayMonumente.slice();
        		console.log(whichMap, arrayLocatii);
        		break;
    		case "Muzee":
       			arrayLocatii = arrayMuzee.slice();
        		console.log(whichMap, arrayLocatii);
        		break;
        	case "Palate":
       			arrayLocatii = arrayPalate.slice();
       			console.log(whichMap, arrayLocatii);
        		break;
        	case "Parcuri":
       			arrayLocatii = arrayParcuri.slice();
       			console.log(whichMap, arrayLocatii);
        		break;
        	case "Piete":
       			arrayLocatii = arrayPiete.slice();
       			console.log(whichMap, arrayLocatii);
        		break;
        	case "Lacasuri":
       			arrayLocatii = arrayLacasuri.slice();
       			console.log(whichMap, arrayLocatii);
        		break;
        	case "Poduri":
       			arrayLocatii = arrayPoduri.slice();
       			console.log(whichMap, arrayLocatii);
        		break;
    		default:
       			arrayLocatii = [{name:'Timisoara', pos: {lat: 45.7555936 , lng: 21.2269221 }}];
        		console.log(whichMap, arrayLocatii);
		}
		return arrayLocatii; 
	}

    function createMarker(posn, title, map, infoWindow) {
      	var marker = new google.maps.Marker({ position: posn, map: map, title: title});
    	marker['content'] = title;
    	marker.addListener('click', function() {
    		infoWindow.setContent(this['content']);
          	infoWindow.open(map, marker);
        });

    return marker;
}

      function initMap() {
      	var infoWindow = new google.maps.InfoWindow();
        var timisoara = {name:'Timisoara', pos: {lat: 45.7555936 , lng: 21.2269221 }}; //piata libertatii
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: timisoara.pos
        });

        var map_traseu = new google.maps.Map(document.getElementById('map_traseu'), {
          zoom: 15,
          center: timisoara.pos
        });

        for(var i = 0; i < arrayLocatii.length; i++) {
        	createMarker(arrayLocatii[i].pos, arrayLocatii[i].name, map, infoWindow);
        	}
      

 
    	var directionsDisplay = new google.maps.DirectionsRenderer;
        var directionsService = new google.maps.DirectionsService;
        
        directionsDisplay.setMap(map);
        directionsDisplay.setPanel(document.getElementById('right-panel'));

        var control = document.getElementById('floating-panel');
        control.style.display = 'block';
        map.controls[google.maps.ControlPosition.TOP_CENTER].push(control);

        var onChangeHandler = function() {
          //document.getElementById("right-panel").style.backgroundColor = "rgba(220,220,220, 0.8)";
          var width = window.innerWidth - 401;
          document.getElementById("map").style.width = width;
          window.alert(document.getElementById('map').style.width);
          //document.getElementById("right-panel").style.float = "right";
          calculateAndDisplayRoute(directionsService, directionsDisplay);
        };
        document.getElementById('start').addEventListener('change', onChangeHandler);
        document.getElementById('end').addEventListener('change', onChangeHandler);

      }

      function calculateAndDisplayRoute(directionsService, directionsDisplay) {
      	var str = document.getElementById('start').value;
      	var start = eval("("+str+")");
        str = document.getElementById('end').value;
        var end = eval("("+str+")");
        directionsService.route({
          origin: start,
          destination: end,
          travelMode: 'WALKING'
        }, function(response, status) {
          if (status === 'OK') {
            directionsDisplay.setDirections(response);
          } else {
            window.alert('Eroare: ' + status);
          }
        });
      }
  
    </script>

    <script 
    async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZxWOnXpB0HDn-6cEbwJcnHbw6uq3jXM8&libraries=visualization&language=ro&callback=initMap">
    </script>