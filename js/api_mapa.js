function iniciarMap(){
    var coord = {lat:40.433282214271124 ,lng: -3.6327332198809787};
    var map = new google.maps.Map(document.getElementById('map'),{
      zoom: 15,
      center: coord
    });
    var marker = new google.maps.Marker({
      position: coord,
      map: map
    });
}