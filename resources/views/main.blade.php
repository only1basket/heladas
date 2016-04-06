<?php
$SYS_NAME = 'PASTO';
$WWW_BASE = 'http://localhost/dev/pasto/html/';
?>
        <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="{{ $SYS_NAME}}">
    <!--[if ie]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->

    <title>@yield('title','')</title>
    <base href="{{ $WWW_BASE}}">
    <link rel="shortcut icon" href="{{ asset('plugins/bootstrap/img/favicon.ico') }}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/prettyPhoto.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap/css/settings.css') }}" media="screen"/>
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/color-scheme/blue.css') }}">

    <!-- Base JS -->
    <script src="{{ asset('plugins/bootstrap/js/jquery-1.9.1.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/main.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/rut/jquery.Rut.js') }}" type="text/javascript"></script>

    <!-- Revolution Slider -->
    <script src="{{ asset('plugins/bootstrap/js/jquery.themepunch.plugins.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/revolution-slider-options.js') }}"></script>

    <!-- Prety photo -->
    <script src="{{ asset('plugins/bootstrap/js/jquery.prettyPhoto.js') }}"></script>
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>

    <script>
        $(document).ready(function () {
            $("a[rel^='prettyPhoto']").prettyPhoto();

            $("#nuevopredio").click(function () {
                initialize();
            });

            // Set a callback to run when the Google Visualization API is loaded.
            google.setOnLoadCallback(drawChart);

            $(window).resize(function () {
                drawChart();
            });
        });

        // Load the Visualization API and the piechart package.
        google.load('visualization', '1.0', {'packages': ['corechart']});

        // Callback that creates and populates a data table,
        // instantiates the pie chart, passes in the data and
        // draws it.
        function drawChart() {

            // Create the data table.
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Topping');
            data.addColumn('number', 'Kg MS/ha/día');
            data.addRows([
                ['01/12/2013 al 10/12/2013', 22],
                ['11/12/2013 al 20/12/2013', 18],
                ['21/12/2013 al 30/12/2013', 28],
                ['31/12/2013 al 09/01/2014', 31]
            ]);

            // Set chart options
            var options = {
                'title': 'Estimado Kg MS/ha/día',
                'height': 300
            };

            // Instantiate and draw our chart, passing in some options.
            var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
            chart.draw(data, options);
        }

        function initialize() {
            var mapOptions = {
                center: new google.maps.LatLng(-41.02965517633313, -73.10300234374995),
                zoom: 8,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);

            setTimeout(function () {
                        google.maps.event.trigger(map, 'resize');
                    },
                    100);
        }
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#rut').Rut({
                on_error: function () {
                    alert('Rut incorrecto');
                }
            });

            $("#content > ul").tabs();
        });
    </script>
</head>

<body class="bg-shattered">
<div class="main boxed">

    <!-- TOP BAR
    ============================================= -->
    @include('partials.topbar')
            <!-- END TOP BAR
    ============================================= -->

    <!-- HEADER
    ============================================= -->
    @include('partials.header')
            <!-- END HEADER
    ============================================= -->

    <!-- TITLE BAR
    ============================================= -->
    @include('partials.titlebar')
            <!-- END TITLE BAR
    ============================================= -->

    <!-- CONTENT
    ============================================= -->
    @yield('content')
            <!-- END CONTENT
    ============================================= -->

    <!-- FOOTER
    ============================================= -->
    @include('partials.footer')
            <!-- END FOOTER
    ============================================= -->
    <!-- STYLE SWITCHER
    ============================================= -->
    <!-- END STYLE SWITCHER
============================================= -->
</div>
<!-- END MAIN
    ============================================= -->
</body>
</html>