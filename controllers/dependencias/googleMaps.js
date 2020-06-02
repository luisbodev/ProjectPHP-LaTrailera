$("#btnMark").on("click", function() {
    $(this).attr('disabled', true);
});


var map;
var contador = 0;
var contadora = 0;
var markers = [];
var marcadores = [];
var banderaPa = 1;
var banderaPb = 1;

function initMap() {
    var directionsService = new google.maps.DirectionsService();
    var directionsRenderer = new google.maps.DirectionsRenderer();
    map = new google.maps.Map(document.getElementById('map'), {
        center: { lat: 13.698473140684895, lng: -89.20124182969334 },
        zoom: 8
    });

    directionsRenderer.setMap(map);


    var onChangeHandler = function() {
        calculateAndDisplayRoute(directionsService, directionsRenderer);
    };
    document.getElementById('btnDibujarRuta').addEventListener('click', onChangeHandler);
    //document.getElementById('btn').addEventListener('click', onChangeHandler);
    document.getElementsByClassName('boton').addEventListener('click', onChangeHandler);




} //Fin de el Init MAp>>>>>>>>>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<

function ruta() {



}


function calculateAndDisplayRoute(directionsService, directionsRenderer) {

    var my_lat = $("#my_lat").val();
    var my_lng = $('#my_lng').val();
    var your_lat = $("#your_lat").val();
    var your_lng = $('#your_lng').val();

    var start = new google.maps.LatLng(my_lat, my_lng);
    var end = new google.maps.LatLng(your_lat, your_lng);
    directionsService.route({

            origin: start,
            destination: end,
            travelMode: 'DRIVING'
        },
        function(response, status) {
            if (status === 'OK') {
                directionsRenderer.setDirections(response);
            } else {
                window.alert('La ruta no se puede dibujar, pues no hay calles conectadas ' + status);
                $("#my_lat").val("");
                $('#my_lng').val("");
                $("#your_lat").val("");
                $('#your_lng').val("");
                $('#kilometraje').val("");
            }
        });
}


function obtenerKmts() {
    var geocoder = new google.maps.Geocoder;
    var service = new google.maps.DistanceMatrixService;
    var bounds = new google.maps.LatLngBounds;
    var markersArray = [];


    var my_lat = $("#my_lat").val();
    var my_lng = $('#my_lng').val();
    var your_lat = $("#your_lat").val();
    var your_lng = $('#your_lng').val();

    var origin1 = new google.maps.LatLng(my_lat, my_lng);
    var destinationA = new google.maps.LatLng(your_lat, your_lng);

    var destinationIcon = 'https://chart.googleapis.com/chart?chst=d_map_pin_letter&chld=D|FF0000|000000';
    var originIcon = 'https://chart.googleapis.com/chart?chst=d_map_pin_letter&chld=O|FFFF00|000000';
    service.getDistanceMatrix({
        origins: [origin1],
        destinations: [destinationA],
        travelMode: 'DRIVING',
        unitSystem: google.maps.UnitSystem.METRIC,
        avoidHighways: false,
        avoidTolls: false

    }, function(response, status) {
        if (status !== 'OK') {
            alert('Error was: ' + status);
        } else {
            var originList = response.originAddresses;
            var destinationList = response.destinationAddresses;
            var outputDiv = document.getElementById('output');
            outputDiv.innerHTML = '';
            //deleteMarkers(markersArray);

            var showGeocodedAddressOnMap = function(asDestination) {
                var icon = asDestination ? destinationIcon : originIcon;
                return function(results, status) {
                    if (status === 'OK') {

                        map.fitBounds(bounds.extend(results[0].geometry.location));
                        markersArray.push(new google.maps.Marker({
                            map: map,
                            position: results[0].geometry.location,
                            icon: icon
                        }));




                    } else {
                        //alert('Geocode was not successful due to: ' + status);
                    }
                };
            };

            for (var i = 0; i < originList.length; i++) {
                var results = response.rows[i].elements;
                geocoder.geocode({ 'address': originList[i] },
                    showGeocodedAddressOnMap(false));
                for (var j = 0; j < results.length; j++) {
                    geocoder.geocode({ 'address': destinationList[j] },
                        showGeocodedAddressOnMap(true));
                    //outputDiv.innerHTML += results[j].distance.text + ' en ' +results[j].duration.text + '<br>';
                    $('#kilometraje').val(results[j].distance.text);

                    var kilo = $('#kilometraje').val();
                    if (kilo.length > 4)
                        var fin = (kilo.length) - 3;
                    else
                        var fin = (kilo.length) - 2;
                    var kilolo = kilo.substring(0, fin);

                    if (kilolo.includes(','))
                        var kilolo = kilolo.replace(",", ".")

                    $('#kilometrajeReal').val(kilolo);
                    $('#tiempo').val(results[j].duration.text);
                }
            }
        }
    });
}



function deleteMarkers(markersArray) {
    for (var i = 0; i < markersArray.length; i++) {
        markersArray[i].setMap(null);
    }
    markersArray = [];
}






function agregarPunto(banderaPa) {
    banderaPb = banderaPa;
    if (banderaPa == 0) {

        map.addListener('click', function(e) {

            if (contador == 0) {
                deleteMarkers();

                $('#oculto').val(e.latLng); //Impreme la latitud y la logitud en formato: (lat, lang)
                var cadenita = $('#oculto').val();

                var latIncompleta = (cadenita.split(" ")); //Separamos la logitud y la latitud

                var final = (latIncompleta[0].length) - 1; //Encontramos la logitud del el string guardado en [0] y le restamos 1 porque termina en coma ","
                var end = (latIncompleta[1].length - 1)

                var latitud = latIncompleta[0].substring(1, final);
                var longitud = latIncompleta[1].substring(0, end);

                $("#my_lat").val(latitud).trigger('change');
                $('#my_lng').val(longitud).trigger('change');;
                //$("#your_lat").val("");
                //$('#your_lng').val("");
                $('#latLng').val(e.latLng);

                placeMarkerAndPanTo(e.latLng, map);
            } else {




                $('#oculto').val(e.latLng); //Impreme la latitud y la logitud en formato: (lat, lang)
                var cadenita = $('#oculto').val();

                var latIncompleta = (cadenita.split(" ")); //Separamos la logitud y la latitud

                var final = (latIncompleta[0].length) - 1; //Encontramos la logitud del el string guardado en [0] y le restamos 1 porque termina en coma ","
                var end = (latIncompleta[1].length - 1)


                var latitud = latIncompleta[0].substring(1, final);
                var longitud = latIncompleta[1].substring(0, end);

                $("#your_lat").val(latitud).trigger('change');
                $('#your_lng').val(longitud).trigger('change');
                $('#latLng').val(e.latLng);
                placeMarkerAndPanTob(e.latLng, map);
                //lol();
                obtenerKmts();
            }
        });
    }
}



function placeMarkerAndPanTo(latLng, map) {
    contador++;
    var posicionA = new google.maps.Marker({
        position: latLng,
        label: "A",
        map: map,
        title: "Posición A" + contador,
        animation: google.maps.Animation.DROP
    });
    markers.push(posicionA);

}

//Marcador secundario adiconal evalua si se colocó otro marcador para eliminar el anterior :)
function placeMarkerAndPanTob(latLng, map) {
    contador = 0;
    var posicionA = new google.maps.Marker({
        position: latLng,
        label: "B",
        map: map,
        title: "Pocisión B" + contador,
        animation: google.maps.Animation.DROP
    });
    markers.push(posicionA);

}

function setMapOnAll(map) {
    for (var i = 0; i < markers.length; i++) {
        markers[i].setMap(map);
    }
}


function clearMarkers() {
    setMapOnAll(null);
}


function showMarkers() {
    setMapOnAll(map);
}


function deleteMarkers() {
    clearMarkers();
    markers = [];
}




//Geolocalización---Ismael Castillo Martínez---------------------
function get_my_location() {
    var infoWindow;

    infoWindow = new google.maps.InfoWindow;

    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('Hubicación encontrada.');
            infoWindow.open(map);
            map.setCenter(pos);
        }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
        });
    } else {
        // Browser doesn't support Geolocation
        handleLocationError(false, infoWindow, map.getCenter());
    }
}



//Mensaje de error cuando no le permitimos la geolocalización--------------------
function handleLocationError(browserHasGeolocation, infoWindow, pos) {
    infoWindow.setPosition(pos);
    infoWindow.setContent(browserHasGeolocation ?
        'Error: El servicio de geolocalización falló.' :
        'Error: Tu navegador no soporta geolocalización.');
    infoWindow.open(map);
}