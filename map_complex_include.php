<script>
var complexMancare = [{name: "3F", pos: {lat: 45.7649595 , lng: 21.2237928 }} ,
      {name: "Cantina Studențească Politehnica Timișoara", pos: {lat: 45.753954 , lng: 21.225356 }} ,
      {name: "Casa Moc", pos: {lat: 45.7488671 , lng: 21.2392025 }} ,
      {name: "Clătite la Pinochio", pos: {lat: 45.7570583 , lng: 21.2284494 }} ,
      {name: "Napoleon", pos: {lat: 45.749691 , lng: 21.241012 }} ,
      {name: "Oxford", pos: {lat: 45.7504753 , lng: 21.2421472 }} ,
      {name: "Paradisul Piraților", pos: {lat: 45.7489592 , lng: 21.2398821 }} ,
      {name: "Pret-A-Manger", pos: {lat: 45.7492569 , lng: 21.2400826 }} ,
      {name: "Student’s Pub", pos: {lat: 45.7408478 , lng: 21.2399022 }}
    ];
  var complexRelaxare = [{name: "ATU PUB", pos: {lat: 45.7499828 , lng: 21.2385484 }} ,
      {name: "BiblioTech Cafe", pos: {lat: 45.7473489 , lng: 21.2287955 }} ,
      {name: "Caffe Tabaco", pos: {lat: 45.7510325 , lng: 21.2411401 }} ,
      {name: "Wake-Up Café", pos: {lat: 45.7500517 , lng: 21.2383956 }} 
    ];
  var complexInvat = [{name: "Biblioteca Centrală a Universității Politehnica Timișoara", pos: {lat: 45.7471671 , lng: 21.2288804 }} ,
      {name: "Biblioteca Centrală Universitară Eugen Todoran", pos: {lat: 45.747774 , lng: 21.230122 }} 
    ];
    function createMarker(posn, title, map, infoWindow) {
        var marker = new google.maps.Marker({ position: posn, map: map, title: title});
      marker['content'] = title;
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
        var timisoara = {name:'Timisoara', pos: {lat: 45.7555936 , lng: 21.2269221 }}; //piata libertatii
        var centerComplexMananc = {name: 'Direcția de Evidență a Persoanelor Timișoara', pos: {lat: 45.754189 , lng: 21.234344 }};
        var centerComplexRelax = {name: 'Thermal resort ZHH', pos: {lat: 45.7501902 , lng: 21.2361745 }};
        var centerComplexInvat = {name: "UVT West University of Timișoara", pos: {lat: 45.7471192 , lng: 21.2316148 }};
        var map01 = new google.maps.Map(document.getElementById('mapComplexMancare'), getMapOptions(centerComplexMananc));
        var map02 = new google.maps.Map(document.getElementById('mapComplexRelaxare'), getMapOptions(centerComplexRelax));
        var map03 = new google.maps.Map(document.getElementById('mapComplexInvat'), getMapOptions(centerComplexInvat));
        for(var i = 0; i < complexMancare.length; i++) {
          createMarker(complexMancare[i].pos, complexMancare[i].name, map01, infoWindow);
          }
        for(var i = 0; i < complexRelaxare.length; i++) {
          createMarker(complexRelaxare[i].pos, complexRelaxare[i].name, map02, infoWindow);
          }
         for(var i = 0; i < complexInvat.length; i++) {
          createMarker(complexInvat[i].pos, complexInvat[i].name, map03, infoWindow);
          }
      }
    
    </script>
    <script 
    async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZxWOnXpB0HDn-6cEbwJcnHbw6uq3jXM8&libraries=visualization&callback=initMap">
    </script>