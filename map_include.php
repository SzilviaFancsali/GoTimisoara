<div id="map" style="height:100%; width:100%;"></div>
    <script>

    var whichMap = "<?php echo $var; ?>";
   
    var arrayCafenele = [{name: "5 To Go", pos: {lat: 45.7511691, lng: 21.2255083 }} ,
			{name: "Aethernativ", pos: {lat: 45.7583275 , lng: 21.2261825 }} ,
			{name: "Alice Kyteler", pos: {lat: 45.7584145 , lng: 21.2294919 }} ,
			{name: "Ambasada", pos: {lat: 45.7501748 , lng: 21.2154378 }} ,
			{name: "Baroque Cafe", pos: {lat: 45.7575303 , lng: 21.2299777 }} ,
			{name: "Cafeneaua Verde", pos: {lat: 45.756137 , lng: 21.226865 }} ,
			{name: "Mokum Cafe", pos: {lat: 45.7566924 , lng: 21.2296012 }} ,
			{name: "Coffee Hub", pos: {lat: 45.7458686 , lng: 21.2334428 }} ,
			{name: "DreamCafe", pos: {lat: 45.7312174 , lng: 21.2453219 }} ,
			{name: "Eclipse", pos: {lat: 45.7574744 , lng: 21.2286695 }} ,
			{name: "Emotion Cafe", pos: {lat: 45.7584074 , lng: 21.2292603 }} ,
			{name: "Friends Cafe", pos: {lat: 45.757397 , lng: 21.2299586 }} ,
			{name: "Garage Cafe", pos: {lat: 45.7573708 , lng: 21.2301504 }} ,
			{name: "Jack’s Bistro", pos: {lat: 45.7563087 , lng: 21.227788 }} ,
			{name: "La Pisici", pos: {lat: 45.7463389 , lng: 21.2366045 }} ,
			{name: "Lento", pos: {lat: 45.723824 , lng: 21.1988514 }} ,
			{name: "Massimo", pos: {lat: 45.7522865 , lng: 21.2245922 }} ,
			{name: "M Bistro", pos: {lat: 45.757626 , lng: 21.2299884 }} ,
			{name: "Neața Omlette Bistro", pos: {lat: 45.756286 , lng: 21.2280019 }} ,
			{name: "Cafe Opera", pos: {lat: 45.7520221 , lng: 21.2244554 }} ,
			{name: "Ovride Specialty Coffee", pos: {lat: 45.7543199 , lng: 21.2275594 }} ,
			{name: "Scârț Loc Lejer", pos: {lat: 45.7432188 , lng: 21.2242973 }} ,
			{name: "Symphony Cafe", pos: {lat: 45.7541383 , lng: 21.2256436 }} ,
			{name: "Tucano Coffee Mexico", pos: {lat: 45.7567436 , lng: 21.2271254 }} ,
			{name: "Viniloteca", pos: {lat: 45.7480281 , lng: 21.2198043 }} ,
			{name: "Vivani Caffe", pos: {lat: 45.7631418 , lng: 21.2177645 }} ,
			{name: "YoYo Café", pos: {lat: 45.7330508 , lng: 21.261235 }} ,
			{name: "Zai Après Café", pos: {lat: 45.756755 , lng: 21.228732 }} ,
			{name: "Zone Cafe", pos: {lat: 45.731391 , lng: 21.2452868 }} 
		];

	var arrayRestaurante = [{name: "Restaurant CAPRICE", pos: {lat: 45.774646 , lng: 21.240616 }} ,
			{name: "Casa bunicii", pos: {lat: 45.7437832 , lng: 21.2247216 }} ,
			{name: "Casa bunicii 2 - Dumbrăvița", pos: {lat: 45.796798 , lng: 21.242818 }} ,
			{name: "Casa del Sole", pos: {lat: 45.744305 , lng: 21.221607 }} ,
			{name: "Craft Rooftop", pos: {lat: 45.7539793 , lng: 21.2266451 }} ,
			{name: "DAF Junior", pos: {lat: 45.703363 , lng: 21.238648 }} ,
			{name: "Restaurant Dinar", pos: {lat: 45.752112 , lng: 21.240322 }} ,
			{name: "Restaurant Flora", pos: {lat: 45.7490464 , lng: 21.2223362 }} ,
			{name: "KOLORO", pos: {lat: 45.747989 , lng: 21.2297561 }} ,
			{name: "Lloyd", pos: {lat: 45.7534845 , lng: 21.2251948 }} ,
			{name: "Localhost Pub", pos: {lat: 45.7486935 , lng: 21.2176921 }} ,
			{name: "Restaurant Merlot", pos: {lat: 45.756454 , lng: 21.242062 }} ,
			{name: "Restaurant Nora", pos: {lat: 45.7342602 , lng: 21.2022974 }} ,
			{name: "Rivière Brasserie", pos: {lat: 45.7488902 , lng: 21.226409 }} ,
			{name: "Sky Restaurant", pos: {lat: 45.7568943 , lng: 21.2217611 }} ,
			{name: "Valery", pos: {lat: 45.730756 , lng: 21.249018 }} ,
			{name: "Vineri 15", pos: {lat: 45.7480931 , lng: 21.230312 }} 
		];

	var arrayCluburi = [{name: "BierHaus Bunker", pos: {lat: 45.7586585 , lng: 21.2270424 }} ,
			{name: "Club30", pos: {lat: 45.7514637 , lng: 21.2251272 }} ,
			{name: "Epic Society", pos: {lat: 45.7692854 , lng: 21.2229026 }} ,
			{name: "Fratelli", pos: {lat: 45.750845 , lng: 21.236647 }} ,
			{name: "Heaven", pos: {lat: 45.7396232 , lng: 21.2491382 }} ,
			{name: "Molly Malone’s", pos: {lat: 45.7574596 , lng: 21.22723 }} ,
			{name: "No Name", pos: {lat: 45.7380474 , lng: 21.2446729 }}
		];

	var arrayDiverse = [{name: "4DX & IMAX", pos: {lat: 45.7227278 , lng: 21.1996966 }} ,
			{name: "Arena Paintball", pos: {lat: 45.7164382 , lng: 21.249577 }} ,
			{name: "Balul Vienez", pos: {lat: 45.7540588 , lng: 21.2258572 }} ,
			{name: "Blue Line - The Shooting Range", pos: {lat: 45.7702265 , lng: 21.2277156 }} ,
			{name: "Choco Kebab", pos: {lat: 45.7550156 , lng: 21.2279775 }} ,
			{name: "Exitgames România", pos: {lat: 45.7379518 , lng: 21.2166671 }} ,
			{name: "Megazone LaserTag", pos: {lat: 45.7529944 , lng: 21.2243575 }} ,
			{name: "Red Motor", pos: {lat: 45.7119378 , lng: 21.2121723 }} ,
			{name: "Plimbări cu hidrobicicleta sau caiacul", pos: {lat: 45.7494797 , lng: 21.2265729 }}
		];


	var arrayLocatii = getArrayLocatii(whichMap);

	function getArrayLocatii(whichMap){
		arrayLocatii = arrayCafenele.slice();
		switch(whichMap) {
    		case "Cafenele":
        		arrayLocatii = arrayCafenele.slice();
        		console.log(whichMap, arrayLocatii);
        		break;
    		case "Restaurante":
       			arrayLocatii = arrayRestaurante.slice();
        		console.log(whichMap, arrayLocatii);
        		break;
    		case "Cluburi":
       			arrayLocatii = arrayCluburi.slice();
        		console.log(whichMap, arrayLocatii);
        		break;
        	case "Diverse":
       			arrayLocatii = arrayDiverse.slice();
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

        for(var i = 0; i < arrayLocatii.length; i++) {
        	createMarker(arrayLocatii[i].pos, arrayLocatii[i].name, map, infoWindow);
        	}
      }

    </script>
    <script 
    async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZxWOnXpB0HDn-6cEbwJcnHbw6uq3jXM8&libraries=visualization&callback=initMap">
    </script>