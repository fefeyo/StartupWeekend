<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ $title or 'StartUpWeekend' }}</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    @yield('addCss')
</head>
<body>
    <div id="main" class="row">
        @yield('content')
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAV0vveF5vv8kLRDDgU4dBFpbOIBAAlB6g&callback=initMap"></script>
    <script src="{{ asset('js/index.js') }}"></script>
    @yield('addJs')
</body>
</html>
