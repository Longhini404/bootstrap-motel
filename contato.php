<?php include 'header.php';?>

<body>

<?php include 'menu.php';?>

    <section class="map">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="boxed p-5">
                        <h2 style="color: #fc2c38">Tóquio, Japão</h2>
                        <ul class="list-group list-group-line">
                            <li class="list-group-item d-flex align-items-center">
                                <i class="icon-map-pin2 fs-24 text-red"></i>
                                <span>Nihonbashi, 103-0014</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center">
                                <i class="icon-mail fs-24 text-red"></i>
                                <span>guilhermelonghini@gmail.com</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center">
                                <i class="icon-phone2 fs-24 text-red"></i>
                                <span>+55 44 98847-3908</span>
                            </li>
                        </ul>
                        <a href="" class="btn btn-red btn-block btn-rounded mt-2">Mapa</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="map" class="map-area"></div>
        <script>
            function initMap() {
                // DARK MODE
                var map = new google.maps.Map(document.getElementById('map'), {
                    center: {lat: 35.6679191, lng: 139.4606805 },
                    zoom: 12,
                    scrollwheel: false,
                    zoomControl: true,
                    disableDefaultUI: true,
                    styles:[
                        {
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#212121"
                                }
                            ]
                        },
                        {
                            "elementType": "labels.icon",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "color": "#757575"
                                }
                            ]
                        },
                        {
                            "elementType": "labels.text.stroke",
                            "stylers": [
                                {
                                    "color": "#212121"
                                }
                            ]
                        },
                        {
                            "featureType": "administrative",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#757575"
                                }
                            ]
                        },
                        {
                            "featureType": "administrative.country",
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "color": "#9e9e9e"
                                }
                            ]
                        },
                        {
                            "featureType": "administrative.land_parcel",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "administrative.locality",
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "color": "#bdbdbd"
                                }
                            ]
                        },
                        {
                            "featureType": "poi",
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "color": "#757575"
                                }
                            ]
                        },
                        {
                            "featureType": "poi.park",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#181818"
                                }
                            ]
                        },
                        {
                            "featureType": "poi.park",
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "color": "#616161"
                                }
                            ]
                        },
                        {
                            "featureType": "poi.park",
                            "elementType": "labels.text.stroke",
                            "stylers": [
                                {
                                    "color": "#1b1b1b"
                                }
                            ]
                        },
                        {
                            "featureType": "road",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "#2c2c2c"
                                }
                            ]
                        },
                        {
                            "featureType": "road",
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "color": "#8a8a8a"
                                }
                            ]
                        },
                        {
                            "featureType": "road.arterial",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#373737"
                                }
                            ]
                        },
                        {
                            "featureType": "road.highway",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#3c3c3c"
                                }
                            ]
                        },
                        {
                            "featureType": "road.highway.controlled_access",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#4e4e4e"
                                }
                            ]
                        },
                        {
                            "featureType": "road.local",
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "color": "#616161"
                                }
                            ]
                        },
                        {
                            "featureType": "transit",
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "color": "#757575"
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#000000"
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "color": "#3d3d3d"
                                }
                            ]
                        }
                    ]
                });

                map.panBy(0, -200);

                var pin ='assets/images/pin-green.svg';

                var marker = new google.maps.Marker({
                    position: map.getCenter(),
                    icon: pin,
                    map: map
                });
            }
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCQDPpWHjRVO7pv55VvNrOU7KOiGmAQjvE&callback=initMap"
                async defer></script>
    </section>
    <!-- / Map -->


    <?php include 'footer.php';?>