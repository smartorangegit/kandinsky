var markerArr = [];
var flag = true;

function createContent(title, text) {
  var text = text || '';
  var str = '<div class="map__info_small-marker">' + '<h3>' + title + '</h3>' +    
    '<p>' + text + '</p>' + '</div>';
  return str;
}

function initMap() {
  var windowWidth = $(window).width();
  var centerX = 46.450553;
  var centerY = 30.764012;

  if( windowWidth < 992 && windowWidth > 600) {
   centerX = 46.455053;
   centerY = 30.751512;
  } 
  
  var contentString = $('.map__info-marker').html();
  //46.466628, 30.757518
  var locations = [
    [contentString, 46.450553, 30.764012, "/img/location/main-marker.png"]
  ];
  var infowindow = new google.maps.InfoWindow();
  var checkBoxes = document.getElementsByClassName('map-check-boxes');
  var marker, i;
  var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 14,
      scrollwheel: false,
      center: new google.maps.LatLng( centerX, centerY),
      mapTypeId: google.maps.MapTypeId.ROADMAP
  });

  var icons = {
    aptec: '/img/location/aptec-ico.png',
    bank: '/img/location/bank-ico.png',
    dantist: '/img/location/dantist-ico.png',
    gym: '/img/location/gym-ico.png',
    highschool: '/img/location/highschoolschool-ico.png',
    market: '/img/location/market-ico.png',
    restaurant: '/img/location/restaurant-ico.png',
    shop: '/img/location/shop-ico.png',
    suvenire: '/img/location/suvenire-ico.png',
    park: '/img/location/park-ico.png',
    kinderGarden: '/img/location/kinderGarden.png',
    school: '/img/location/school.png',
  };

  
  $.getJSON("/js/map/mapMarker.json", function(data) {
    var markers = data;
    createMarkers(markers);
  });
  
  marker = new google.maps.Marker({
    position: new google.maps.LatLng(locations[0][1], locations[0][2]),
    map: map,
    icon: {
      url: locations[0][3],
     /* scaledSize: new google.maps.Size(121, 149)*/
    }
  });
  infowindow.setContent(locations[0][0]);
  infowindow.open(map, marker);
  google.maps.event.addListener(marker, 'click', (function(marker, i) {
      return function() {
          infowindow.setContent(locations[0][0]);
          infowindow.open(map, marker);
      }
  })(marker));
  
  
  // Create markers.
  function createMarkers(features) {
    features.forEach(function(feature) {
      feature.coords = feature.coords.split(',');
      var marker = new google.maps.Marker({
        position: new google.maps.LatLng(feature.coords[1], feature.coords[0]),
        //type: feature.type,
        icon: icons[feature.type],
        map: map,
        type: feature.type
      });
      feature.text = '<h2 class="marker__title">' + feature.title_ru + '</h2>' + '<span>' + feature.description_ru + '</span>';
      //infowindow.setContent(contentString);
      //infowindow.open(map, marker);
      google.maps.event.addListener(marker, 'click', (function(marker,feature) {
          return function() {
              infowindow.setContent(createContent(feature.text));
              infowindow.open(map, marker);
          }
      })(marker,feature));
      markerArr.push(marker);
    });
  }
  
  function filterMarker(type){
    markerArr.forEach(function(elem){
      
      if( !elem.map && elem.type === type) {
        elem.setMap(map);
      } else if(elem.type === type) {
        elem.setMap(null);
      }
    })
  }

  function removeTypeMarker(type){
    markerArr.forEach(function(elem){
      
      if(elem.type === type) {
        elem.setMap(null);
      }
    })
  }

  var btns = $('.map__infostruction_item button');
  btns.on('click', function(){
    var btn = $(this);
    var filterType = btn.attr('data-type');
   
    btn.toggleClass('deactive');
    
      filterMarker(filterType);
  })

  $.getJSON("/js/map/mapStyle.json", function(data) {
        map.setOptions({styles: data});
  });
  
}

if (document.getElementById('map')) {
  initMap();
}







