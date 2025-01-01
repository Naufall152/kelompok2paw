<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer Always Bottom</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow-x: hidden;
        }

        .horizontal-scroll-wrapper {
            display: flex;
            flex-wrap: nowrap;
            overflow-x: auto;
            width: 100%;
            -webkit-overflow-scrolling: touch;
        }

        .scroll-content {
            display: flex;
            flex: 0 0 auto;
        }

        #map {
            width: 100vw;
            height: 100vh;
        }

        .map-container {
            flex: 0 0 auto;
            width: 100vw;
            height: 100vh;
            position: relative;
        }

        .attribution {
            position: absolute;
            bottom: 10px;
            left: 10px;
            z-index: 1000;
            background: rgba(255, 255, 255, 0.7);
            padding: 5px;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <header>
        @include('layouts.app')
    </header>
    <main class="horizontal-scroll-wrapper">
        <div class="scroll-content">
            <div class="map-container">
                <div id="map"></div>
                <div class="attribution">
                    <a href="https://www.maptiler.com" target="_blank">
                        <img src="https://api.maptiler.com/resources/logo.svg" alt="MapTiler logo">
                    </a>
                    <p>
                        <a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a>
                        <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap
                            contributors</a>
                    </p>
                </div>
            </div>
            <!-- Add more content here for horizontal scrolling -->
        </div>
    </main>


    @php
        $markerIconUrl = Vite::asset('resources/images/marker.png');
    @endphp

    <script>
        const key = 'mhkhgb1kkLqv9H9sr2Jt';

        // Passing PHP variables to JavaScript
        const markerIconUrl = @json($markerIconUrl);

        const map = L.map('map').setView([-7.2707321084187335, 112.75464562093983], 14);

        const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 159,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        const markerIcon = L.icon({
            iconUrl: markerIconUrl,
            iconSize: [96, 96],
            iconAnchor: [54, 96],
            popupAnchor: [-3, -94]
        });

        const mMarker1 = L.marker([-7.257472, 112.752088], {
                icon: markerIcon
            })
            .bindPopup('Cabang Layar Seafood - Surabaya Barat')
            .addTo(map);

        const mMarker2 = L.marker([-7.260663, 112.731721], {
                icon: markerIcon
            })
            .bindPopup('Cabang Ayam Bakar Primarasa - Surabaya Pusat')
            .addTo(map);

        const mMarker3 = L.marker([-7.270579, 112.719619], {
                icon: markerIcon
            })
            .bindPopup('Cabang Depot Bu Rudy - Surabaya Timur')
            .addTo(map);

        const mMarker4 = L.marker([-7.266580, 112.728345], {
                icon: markerIcon
            })
            .bindPopup('Cabang Zangrandi Ice Cream - Surabaya Utara')
            .addTo(map);

        const mMarker5 = L.marker([-7.257831, 112.752015], {
                icon: markerIcon
            })
            .bindPopup('Cabang Pawon Ndeso - Surabaya Selatan')
            .addTo(map);

        const mMarker6 = L.marker([-7.265671, 112.746688], {
                icon: markerIcon
            })
            .bindPopup('Cabang Boncafe - Surabaya Barat')
            .addTo(map);

        const mMarker7 = L.marker([-7.281024, 112.738991], {
                icon: markerIcon
            })
            .bindPopup('Cabang Rawon Setan - Surabaya Pusat')
            .addTo(map);

        const mMarker8 = L.marker([-7.294115, 112.720960], {
                icon: markerIcon
            })
            .bindPopup('Cabang Bebek Sinjay - Surabaya Timur')
            .addTo(map);

        const mMarker9 = L.marker([-7.248456, 112.735780], {
                icon: markerIcon
            })
            .bindPopup('Cabang Warung Bu Kris - Surabaya Utara')
            .addTo(map);

        const mMarker10 = L.marker([-7.261540, 112.775210], {
                icon: markerIcon
            })
            .bindPopup('Cabang Soto Lamongan - Surabaya Selatan')
            .addTo(map);

        const mMarker11 = L.marker([-7.256345, 112.759876], {
                icon: markerIcon
            })
            .bindPopup('Cabang Ikan Bakar Cianjur - Surabaya Barat')
            .addTo(map);

        const mMarker12 = L.marker([-7.283004, 112.735980], {
                icon: markerIcon
            })
            .bindPopup('Cabang Bebek Tepi Sawah - Surabaya Pusat')
            .addTo(map);

        const mMarker13 = L.marker([-7.295345, 112.745610], {
                icon: markerIcon
            })
            .bindPopup('Cabang Waroeng Steak - Surabaya Timur')
            .addTo(map);

        const mMarker14 = L.marker([-7.252878, 112.738456], {
                icon: markerIcon
            })
            .bindPopup('Cabang Mie Titi - Surabaya Utara')
            .addTo(map);

        const mMarker15 = L.marker([-7.268970, 112.770348], {
                icon: markerIcon
            })
            .bindPopup('Cabang Rumah Makan Padang Sederhana - Surabaya Selatan')
            .addTo(map);

        const mMarker16 = L.marker([-7.260000, 112.755000], {
                icon: markerIcon
            })
            .bindPopup('Cabang Bakso President - Surabaya Barat')
            .addTo(map);

        const mMarker17 = L.marker([-7.275000, 112.740000], {
                icon: markerIcon
            })
            .bindPopup('Cabang Rujak Cingur Ahmad Jais - Surabaya Pusat')
            .addTo(map);

        const mMarker18 = L.marker([-7.290000, 112.720000], {
                icon: markerIcon
            })
            .bindPopup('Cabang Bebek Goreng H. Slamet - Surabaya Timur')
            .addTo(map);

        const mMarker19 = L.marker([-7.250000, 112.730000], {
                icon: markerIcon
            })
            .bindPopup('Cabang Sate Klopo Ondomohen - Surabaya Utara')
            .addTo(map);

        const mMarker20 = L.marker([-7.265000, 112.780000], {
                icon: markerIcon
            })
            .bindPopup('Cabang Bakmi GM - Surabaya Selatan')
            .addTo(map);

        const mMarker21 = L.marker([-7.258500, 112.752500], {
                icon: markerIcon
            })
            .bindPopup('Cabang KFC - Surabaya Barat')
            .addTo(map);

        const mMarker22 = L.marker([-7.270800, 112.732100], {
                icon: markerIcon
            })
            .bindPopup('Cabang McDonald\'s - Surabaya Pusat')
            .addTo(map);

        const mMarker23 = L.marker([-7.285600, 112.716400], {
                icon: markerIcon
            })
            .bindPopup('Cabang Pizza Hut - Surabaya Timur')
            .addTo(map);

        const mMarker24 = L.marker([-7.248900, 112.737800], {
                icon: markerIcon
            })
            .bindPopup('Cabang Burger King - Surabaya Utara')
            .addTo(map);

        const mMarker25 = L.marker([-7.261100, 112.770500], {
                icon: markerIcon
            })
            .bindPopup('Cabang Es Krim Ragusa - Surabaya Selatan')
            .addTo(map);

        const mMarker26 = L.marker([-7.257700, 112.759900], {
                icon: markerIcon
            })
            .bindPopup('Cabang Hoka Hoka Bento - Surabaya Barat')
            .addTo(map);

        const mMarker27 = L.marker([-7.282200, 112.736000], {
                icon: markerIcon
            })
            .bindPopup('Cabang Warung Pecel Bu Kus - Surabaya Pusat')
            .addTo(map);

        const mMarker28 = L.marker([-7.296300, 112.746700], {
                icon: markerIcon
            })
            .bindPopup('Cabang Gudeg Bu Hj. Amad - Surabaya Timur')
            .addTo(map);

        const mMarker29 = L.marker([-7.253400, 112.739900], {
                icon: markerIcon
            })
            .bindPopup('Cabang Lontong Balap Pak Gendut - Surabaya Utara')
            .addTo(map);

        const mMarker30 = L.marker([-7.269800, 112.771200], {
                icon: markerIcon
            })
            .bindPopup('Cabang Pempek Ny. Kamto - Surabaya Selatan')
            .addTo(map);


        map.on('click', function(e) {
            var coordinates = e.latlng.toString(); // Get coordinates as a string
            alert("Stasiun makanan berada di :  " + coordinates); // Display in an alert
        });

        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);
    </script>
    <footer class="bg-dark text-white text-center py-4 mt-auto">
        @include('layouts.footer')
    </footer>

</body>

</html>
