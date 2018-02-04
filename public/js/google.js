function initMap() {
  var uluru = {lat:-8.09475,lng:-41.16504};
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 17,
    center: uluru
  });
  var marker = new google.maps.Marker({
    position: uluru,
    map: map
  });
}

function map(long,lat,key) {
  var uluru = {lat:lat,lng:long};
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 17,
    center: uluru
  });
  var marker = new google.maps.Marker({
    position: uluru,
    map: map
  });
  
  //Geocode reverse + atualização no firebase(local e municipio)
  var localizacao = firebase.database().ref('ocorrencias/'+key+'/localizacao');
  var latlng = new google.maps.LatLng(lat, long);
  var geocoder = geocoder = new google.maps.Geocoder();
  geocoder.geocode({ 'latLng': latlng }, function (results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      var endereco= results[0].formatted_address ;
      var value=endereco.split(",");
      var count=value.length;
      var cidade=value[count-3];
      value.splice(count-2, 2);
      endereco=value.toString();
      document.getElementById("municipio").innerText = cidade;
      document.getElementById("local").innerText = endereco;
      localizacao.update({municipio:cidade});
      localizacao.update({local:endereco});
    }
  }); 
}

