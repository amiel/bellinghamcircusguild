Map = google.maps.Map
LatLng = google.maps.LatLng
Marker = google.maps.Marker

initializeMap = ->
  element = $("#map")[0]
  map = new Map element,
    center: new LatLng(48.72013, -122.49853)
    zoom: 15

  new Marker
    position: new LatLng 48.71908, -122.50886
    map: map
    title: "the Cirquelab"

google.maps.event.addDomListener window, 'load', initializeMap
