function initMap() {
    const myLatLng = { lat: -20.260343, lng: -50.559956 };
    const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 17,
      center: myLatLng,
    });
    new google.maps.Marker({
      position: myLatLng,
      map,
      title: "Martins Doces",
    });
  }