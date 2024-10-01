<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('judul', 'BudiGIS')</title>

    <style>
        #map {
            height: 800px;
        }
    </style>

    <link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/leaflet/leaflet.css" rel="stylesheet" type="text/css" />
    <link href="/assets/leaflet/leaflet.draw.css" rel="stylesheet" type="text/css" />
    <link href="/assets/leaflet_search/leaflet-search.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/leaflet_cluster/MarkerCluster.css" rel="stylesheet" type="text/css" />
    <link href="/assets/leaflet_cluster/MarkerCluster.Default.css" rel="stylesheet" type="text/css" />
    <link href="/assets/toastr/toastr.min.css" rel="stylesheet" type="text/css" />
</head>

<body>

    @yield('isi')

    <script src="/assets/jquery/jquery-3.7.1.min.js" type="text/javascript"></script>
    <script src="/assets/bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="/assets/leaflet/leaflet.js" type="text/javascript"></script>
    <script src="/assets/leaflet/leaflet.draw.js" type="text/javascript"></script>
    <script src="/assets/leaflet_search/leaflet-search.min.js" type="text/javascript"></script>
    <script src="/assets/leaflet_cluster/leaflet.markercluster.js"></script>
    <script src="/assets/movingmarker/MovingMarker.js" type="text/javascript"></script>
    <script src="/assets/toastr/toastr.min.js" type="text/javascript"></script>

    @yield('skrip')
</body>

</html>
