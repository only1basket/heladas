<script>
    $(document).ready(function () {
        $("a[rel^='prettyPhoto']").prettyPhoto();

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
</script>
@extends('main')
@section('title','Monitoreo de Heladas')

@section('content')
    <div class="content shortcodes">
        <div class="layout">
            <div class="row">
                <div class="row-item col-1_3 row-mapa">
                    <div class="title">
                        <h3 class="lined">Estaciones Meteorológicas</h3>
                    </div>

                    <div class="b-google-map">
                        <div id="map_canvas" class="full-shadow" style="width: 100%;  height: 600px; min-height: 600px">
                        </div>
                        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
                        <script src="{{ asset('plugins/bootstrap/js/jquery.gmap.min.js') }}"></script>
                        <script>
                            jQuery('#map_canvas').gMap({
                                maptype: 'ROADMAP',
                                scrollwheel: false,
                                latitude: -34.944802,
                                longitude: -71.690111,
                                zoom: 8,
                                markers: [
                                    {
                                        latitude: -35.530653,
                                        longitude: -71.479505,
                                        html: 'Cauquenes, Cauquenes',
                                        popup: false,
                                    },
                                    {
                                        latitude: -35.706583,
                                        longitude: -72.511194,
                                        html: 'Chanco, Chanco',
                                        popup: false,
                                    },
                                    {
                                        latitude: -36.05909279,
                                        longitude: -72.47768878,
                                        html: 'Coronel del Maule, Cauquenes',
                                        popup: false,
                                    },
                                    {
                                        latitude: -36.06211462,
                                        longitude: -72.37143919,
                                        html: 'Los Despachos, Cauquenes',
                                        popup: false,
                                    },
                                    {
                                        latitude: -36.244802,
                                        longitude: -71.934291,
                                        html: 'Monte Flor Tucapel, Parral',
                                        popup: false,
                                    },
                                    {
                                        latitude: -35.530653,
                                        longitude: -71.479505,
                                        html: 'San Clemente, San Clemente',
                                        popup: false,
                                    },
                                    {
                                        latitude: -35.97764359,
                                        longitude: -72.35986381,
                                        html: 'Santa Sofía, Cauquenes',
                                        popup: false,
                                    },
                                    {
                                        latitude: -35.71487926,
                                        longitude: -72.11130833,
                                        html: 'Sauzal, Cauquenes',
                                        popup: false,
                                    },
                                    {
                                        latitude: -35.760761,
                                        longitude: -71.574215,
                                        html: 'Yerbas Buenas, Linares',
                                        popup: false,
                                    },
                                    {
                                        latitude: -34.470992321899,
                                        longitude: -70.986951436879,
                                        html: 'El Tambo, San Vicente',
                                        popup: false,
                                    },
                                    {
                                        latitude: -34.112466,
                                        longitude: -71.797339,
                                        html: 'Hidango, Litueche',
                                        popup: false,
                                    }
                                ],
                            });
                        </script>
                    </div>
                    <div class="gap" style="height: 50px;"></div>
                </div>

                <div class="row-item col-2_3">

                    <h3 class="lined margin-20">Resumen</h3>
                    <!-- Horizontal Tabs -->
                    <div class="b-tabs">
                        <!-- Tabs Navigation -->
                        <ul class="tabs-nav">
                            <li class="active"><span><i class="icon-globe"></i>OHiggins</span></li>
                            <li><span><i class="icon-globe"></i>El Maule</span></li>
                        </ul>
                        <!-- End Tabs Navigation -->
                        <!-- Tabs Content -->
                        <div class="tabs-content">
                            <div class="tab active">
                                <!-- Table -->
                                <div class="b-table">
                                    <table>
                                        <thead>
                                        <tr>
                                            <td>
                                                <i class="icon-map-marker"></i>Estación
                                            </td>
                                            <td style="text-align: center;">
                                                <!--<i class="icon-calendar"></i>--><sup>Ayer</sup> Jueves
                                            </td>
                                            <td style="text-align: center;">
                                                <!--<i class="icon-calendar"></i>--><sup>Hoy</sup> Viernes hasta 17:00 PM
                                            </td>
                                            <td style="text-align: center;">
                                                <!--<i class="icon-calendar"></i>--><sup>Pronóstico</sup> Próximas 12 Horas
                                            </td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <a href="{{ route('detalle_estacion') }}">Cauquenes</a> <sub title='comuna'>Cauquenes</sub>
                                            </td>
                                            <td style="text-align: center;">
                                                1,2<sup>ºC</sup>
                                            </td>
                                            <td style="text-align: center;">
                                                -1,7<sup>ºC</sup>
                                            </td>
                                            <td style="text-align: center;">
                                                -1,4<sup>ºC</sup> a 1,0<sup>ºC</sup>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Chanco <sub title='comuna'>Chanco</sub>
                                            </td>
                                            <td style="text-align: center;">
                                                2,2<sup>ºC</sup>
                                            </td>
                                            <td style="text-align: center;">
                                                2,8<sup>ºC</sup>
                                            </td>
                                            <td style="text-align: center;">
                                                3,3<sup>ºC</sup> a 4,1<sup>ºC</sup>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Coronel del Maule <sub title='comuna'>Cauquenes</sub>
                                            </td>
                                            <td style="text-align: center;">
                                                0,5<sup>ºC</sup>
                                            </td>
                                            <td style="text-align: center;">
                                                0,1<sup>ºC</sup>
                                            </td>
                                            <td style="text-align: center;">
                                                -1,5<sup>ºC</sup> a 0,0<sup>ºC</sup>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Los Despachos <sub title='comuna'>Cauquenes</sub>
                                            </td>
                                            <td style="text-align: center;">
                                                -1,8<sup>ºC</sup>
                                            </td>
                                            <td style="text-align: center;">
                                                -1,0<sup>ºC</sup>
                                            </td>
                                            <td style="text-align: center;">
                                                0,4<sup>ºC</sup> a 0,0<sup>ºC</sup>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                xxx <sub title='comuna'>xxx</sub>
                                            </td>
                                            <td style="text-align: center;">
                                                -1,8<sup>ºC</sup>
                                            </td>
                                            <td style="text-align: center;">
                                                -1,0<sup>ºC</sup>
                                            </td>
                                            <td style="text-align: center;">
                                                0,4<sup>ºC</sup> a 0,0<sup>ºC</sup>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                xxx <sub title='comuna'>xxx</sub>
                                            </td>
                                            <td style="text-align: center;">
                                                -1,8<sup>ºC</sup>
                                            </td>
                                            <td style="text-align: center;">
                                                -1,0<sup>ºC</sup>
                                            </td>
                                            <td style="text-align: center;">
                                                0,4<sup>ºC</sup> a 0,0<sup>ºC</sup>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                xxx <sub title='comuna'>xxx</sub>
                                            </td>
                                            <td style="text-align: center;">
                                                -1,8<sup>ºC</sup>
                                            </td>
                                            <td style="text-align: center;">
                                                -1,0<sup>ºC</sup>
                                            </td>
                                            <td style="text-align: center;">
                                                0,4<sup>ºC</sup> a 0,0<sup>ºC</sup>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                xxx <sub title='comuna'>xxx</sub>
                                            </td>
                                            <td style="text-align: center;">
                                                -1,8<sup>ºC</sup>
                                            </td>
                                            <td style="text-align: center;">
                                                -1,0<sup>ºC</sup>
                                            </td>
                                            <td style="text-align: center;">
                                                0,4<sup>ºC</sup> a 0,0<sup>ºC</sup>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                xxx <sub title='comuna'>xxx</sub>
                                            </td>
                                            <td style="text-align: center;">
                                                -1,8<sup>ºC</sup>
                                            </td>
                                            <td style="text-align: center;">
                                                -1,0<sup>ºC</sup>
                                            </td>
                                            <td style="text-align: center;">
                                                0,4<sup>ºC</sup> a 0,0<sup>ºC</sup>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                xxx <sub title='comuna'>xxx</sub>
                                            </td>
                                            <td style="text-align: center;">
                                                -1,8<sup>ºC</sup>
                                            </td>
                                            <td style="text-align: center;">
                                                -1,0<sup>ºC</sup>
                                            </td>
                                            <td style="text-align: center;">
                                                0,4<sup>ºC</sup> a 0,0<sup>ºC</sup>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                xxx <sub title='comuna'>xxx</sub>
                                            </td>
                                            <td style="text-align: center;">
                                                -1,8<sup>ºC</sup>
                                            </td>
                                            <td style="text-align: center;">
                                                -1,0<sup>ºC</sup>
                                            </td>
                                            <td style="text-align: center;">
                                                0,4<sup>ºC</sup> a 0,0<sup>ºC</sup>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                xxx <sub title='comuna'>xxx</sub>
                                            </td>
                                            <td style="text-align: center;">
                                                -1,8<sup>ºC</sup>
                                            </td>
                                            <td style="text-align: center;">
                                                -1,0<sup>ºC</sup>
                                            </td>
                                            <td style="text-align: center;">
                                                0,4<sup>ºC</sup> a 0,0<sup>ºC</sup>
                                            </td>
                                        </tr>


                                        </tbody>
                                    </table>
                                </div>

                                <!-- Pagination -->
                                <div class="pagination">
                                    <div>
                                        Listado 1 de 4
                                    </div>
                                    <a href="#" class="active">1</a>
                                    <a href="#">2</a>
                                    <a href="#">3</a>
                                    <a href="#">4</a>
                                </div>
                                <!-- End Pagination -->

                                <!-- End Table -->

                            </div>
                            <div class="tab">
                                <!-- Table -->
                                <div class="b-table">
                                    <table>
                                        <thead>
                                        <tr>
                                            <td>
                                                <i class="icon-map-marker"></i>Estación
                                            </td>
                                            <td style="text-align: center;">
                                                <!--<i class="icon-calendar"></i>--><sup>Ayer</sup> Domingo
                                            </td>
                                            <td style="text-align: center;">
                                                <!--<i class="icon-calendar"></i>--><sup>Hoy</sup> Lunes hasta 10:00 AM
                                            </td>
                                            <td style="text-align: center;">
                                                <!--<i class="icon-calendar"></i>--><sup>Pronóstico</sup> Próximas 12 Horas
                                            </td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                xxx <sub title='comuna'>xxx</sub>
                                            </td>
                                            <td style="text-align: center;">
                                                -1,8<sup>ºC</sup>
                                            </td>
                                            <td style="text-align: center;">
                                                -1,0<sup>ºC</sup>
                                            </td>
                                            <td style="text-align: center;">
                                                0,4<sup>ºC</sup> a 0,0<sup>ºC</sup>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                xxx <sub title='comuna'>xxx</sub>
                                            </td>
                                            <td style="text-align: center;">
                                                -1,8<sup>ºC</sup>
                                            </td>
                                            <td style="text-align: center;">
                                                -1,0<sup>ºC</sup>
                                            </td>
                                            <td style="text-align: center;">
                                                0,4<sup>ºC</sup> a 0,0<sup>ºC</sup>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                xxx <sub title='comuna'>xxx</sub>
                                            </td>
                                            <td style="text-align: center;">
                                                -1,8<sup>ºC</sup>
                                            </td>
                                            <td style="text-align: center;">
                                                -1,0<sup>ºC</sup>
                                            </td>
                                            <td style="text-align: center;">
                                                0,4<sup>ºC</sup> a 0,0<sup>ºC</sup>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                xxx <sub title='comuna'>xxx</sub>
                                            </td>
                                            <td style="text-align: center;">
                                                -1,8<sup>ºC</sup>
                                            </td>
                                            <td style="text-align: center;">
                                                -1,0<sup>ºC</sup>
                                            </td>
                                            <td style="text-align: center;">
                                                0,4<sup>ºC</sup> a 0,0<sup>ºC</sup>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                xxx <sub title='comuna'>xxx</sub>
                                            </td>
                                            <td style="text-align: center;">
                                                -1,8<sup>ºC</sup>
                                            </td>
                                            <td style="text-align: center;">
                                                -1,0<sup>ºC</sup>
                                            </td>
                                            <td style="text-align: center;">
                                                0,4<sup>ºC</sup> a 0,0<sup>ºC</sup>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                xxx <sub title='comuna'>xxx</sub>
                                            </td>
                                            <td style="text-align: center;">
                                                -1,8<sup>ºC</sup>
                                            </td>
                                            <td style="text-align: center;">
                                                -1,0<sup>ºC</sup>
                                            </td>
                                            <td style="text-align: center;">
                                                0,4<sup>ºC</sup> a 0,0<sup>ºC</sup>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                xxx <sub title='comuna'>xxx</sub>
                                            </td>
                                            <td style="text-align: center;">
                                                -1,8<sup>ºC</sup>
                                            </td>
                                            <td style="text-align: center;">
                                                -1,0<sup>ºC</sup>
                                            </td>
                                            <td style="text-align: center;">
                                                0,4<sup>ºC</sup> a 0,0<sup>ºC</sup>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                xxx <sub title='comuna'>xxx</sub>
                                            </td>
                                            <td style="text-align: center;">
                                                -1,8<sup>ºC</sup>
                                            </td>
                                            <td style="text-align: center;">
                                                -1,0<sup>ºC</sup>
                                            </td>
                                            <td style="text-align: center;">
                                                0,4<sup>ºC</sup> a 0,0<sup>ºC</sup>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                xxx <sub title='comuna'>xxx</sub>
                                            </td>
                                            <td style="text-align: center;">
                                                -1,8<sup>ºC</sup>
                                            </td>
                                            <td style="text-align: center;">
                                                -1,0<sup>ºC</sup>
                                            </td>
                                            <td style="text-align: center;">
                                                0,4<sup>ºC</sup> a 0,0<sup>ºC</sup>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                xxx <sub title='comuna'>xxx</sub>
                                            </td>
                                            <td style="text-align: center;">
                                                -1,8<sup>ºC</sup>
                                            </td>
                                            <td style="text-align: center;">
                                                -1,0<sup>ºC</sup>
                                            </td>
                                            <td style="text-align: center;">
                                                0,4<sup>ºC</sup> a 0,0<sup>ºC</sup>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                xxx <sub title='comuna'>xxx</sub>
                                            </td>
                                            <td style="text-align: center;">
                                                -1,8<sup>ºC</sup>
                                            </td>
                                            <td style="text-align: center;">
                                                -1,0<sup>ºC</sup>
                                            </td>
                                            <td style="text-align: center;">
                                                0,4<sup>ºC</sup> a 0,0<sup>ºC</sup>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                xxx <sub title='comuna'>xxx</sub>
                                            </td>
                                            <td style="text-align: center;">
                                                -1,8<sup>ºC</sup>
                                            </td>
                                            <td style="text-align: center;">
                                                -1,0<sup>ºC</sup>
                                            </td>
                                            <td style="text-align: center;">
                                                0,4<sup>ºC</sup> a 0,0<sup>ºC</sup>
                                            </td>
                                        </tr>


                                        </tbody>
                                    </table>
                                </div>

                                <!-- Pagination -->
                                <div class="pagination">
                                    <div>
                                        Listado 1 de 2
                                    </div>
                                    <a href="#" class="active">1</a>
                                    <a href="#">2</a>
                                </div>
                                <!-- End Pagination -->

                                <!-- End Table -->
                            </div>

                        </div>
                        <!-- End Tabs Content -->
                    </div>
                    <!-- End Horizontal Tabs -->

                </div>
            </div>

        </div>
    </div>
@endsection
