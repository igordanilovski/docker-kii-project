<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta http-equiv="content-script-type" content="text/javascript; charset=utf-8"/>
    <meta http-equiv="content-style-type" content="text/css; charset=utf-8"/>
    <meta http-equiv="content-language" content="en"/>

    <title>Homepage</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600&display=swap"
          rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
    <script src="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
    <script src="{{ mix('js/app.js') }}"></script>
</head>

<body>
<div class="container">
    <nav>
        <div class="d-flex">
            <img src="{{ asset('storage/icons/logo.svg') }}" class="nav-logo" alt="">
            <div class="nav-links">
                <a href="/">Почетна</a>
            </div>
        </div>
        <div class="right">
            
        </div>
    </nav>

    <div class="page-content mb-5">
        <div class="map-content">
            <div class="entity-placeholder">
                <h4 class="h4-heading">{{ $place }}</h4>
            </div>
            <div id="mapdiv"></div>
            <div class="place-description mt-4 pb-3">
                <h4 class="h4-heading">Податоци за локалот</h4>
                <p><strong>Име: </strong>{{ $place }}</p>
                @if(isset($website) && strlen($website)>2)
                    <p class="mb-4"><strong>Веб страница: </strong><a href="{{ $website }}" target="_blank">{{ $website }}</a></p>
                @else
                    <p class="mb-4"><strong>Веб страница: </strong>Нема податоци</p>
                @endif
                <button class="report-btn" data-value="{{ $id }}">Пријави грешни податоци</button>
            </div>
        </div>
        <input type="hidden" id="lat" value="{{ $lat }}">
        <input type="hidden" id="lon" value="{{ $lon }}">
    </div>
</div>
<script src="http://www.openlayers.org/api/OpenLayers.js"></script>
<script>
    map = new OpenLayers.Map("mapdiv");
    map.addLayer(new OpenLayers.Layer.OSM());

    var lonLat = new OpenLayers.LonLat(document.getElementById('lon').value, document.getElementById('lat').value)
        .transform(
            new OpenLayers.Projection("EPSG:4326"), // transform from WGS 1984
            map.getProjectionObject() // to Spherical Mercator Projection
        );

    var zoom = 16;

    var markers = new OpenLayers.Layer.Markers("Markers");
    map.addLayer(markers);

    markers.addMarker(new OpenLayers.Marker(lonLat));

    map.setCenter(lonLat, zoom);
</script>
</body>
</html>
