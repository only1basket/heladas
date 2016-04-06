<?php
$skip = false;

$mysqli = new mysqli("localhost", "root", "", "heladas_html0");
/* verificar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión failed: %s\n", $mysqli->connect_error);
    exit();
}

/****************************************************************************************************************************************/
$query = "select tiempo, round(avg(t1.valor),1) valor from muestra t1 where tiempo>='2013-08-23' and tiempo<'2013-08-24 05:01' and idEmaVariable=314
group by year(tiempo),month(tiempo),day(tiempo),hour(tiempo)";

$result = $mysqli->query($query);

while ($row = mysqli_fetch_array($result)) {
    $tiempo = $row['tiempo'];
    $valor = $row['valor'];
    $pr_temp[$tiempo] = $valor;


    if ($tiempo == '2013-08-23 17:00:00') {
        $valor = "{ y: $valor, color: '#BF0B23', radius: 10}";
    }

    /*if($valor==5.3){
       $valor= "{ y: $valor, color: '#BF0B23', radius: 10}";
    }*/

    $data1[] = $valor;
}


/****************************************************************************************************************************************/
$query = "select tiempo, round(avg(t1.valor),1) valor from muestra t1 where tiempo>='2013-08-23' and tiempo<'2013-08-24 05:01' and idEmaVariable=317
group by year(tiempo),month(tiempo),day(tiempo),hour(tiempo)";

$result = $mysqli->query($query);

while ($row = mysqli_fetch_array($result)) {
    if ($skip) {
        $skip = false;
        break;
    }

    $tiempo = $row['tiempo'];
    $valor = $row['valor'];
    $pr_hr[$tiempo] = $valor;

    if ($tiempo == '2013-08-23 17:00:00') {
        $valor = "{ y: $valor, color: 'rgb(104, 207, 232)', radius: 10}";
        $skip = true;
    }

    $data2[] = $valor;
}

/****************************************************************************************************************************************/
$query = "select tiempo, round(avg(t1.valor),1) valor from muestra t1 where tiempo>='2013-08-23' and tiempo<'2013-08-24 05:01' and idEmaVariable=322
group by year(tiempo),month(tiempo),day(tiempo),hour(tiempo)";

$result = $mysqli->query($query);

while ($row = mysqli_fetch_array($result)) {
    if ($skip) {
        $skip = false;
        break;
    }

    $tiempo = $row['tiempo'];
    $valor = $row['valor'];
    $valor = round($valor * 3.6, 1);

    if ($tiempo == '2013-08-23 17:00:00') {
        $valor = "{ y: $valor, color: 'rgb(124, 181, 236)', radius: 10}";
        $skip = true;
    }

    $data3[] = $valor;
}

/****************************************************************************************************************************************/
foreach ($pr_temp as $key => $temperatura) {
    if ($skip) {
        $skip = false;
        break;
    }
    $valor = round(((pow(($pr_hr[$key] / 100), 0.125) * (112 + ($temperatura * 0.9))) + (0.1 * $temperatura) - 112), 1);

    if ($key == '2013-08-23 17:00:00') {
        $valor = "{ y: $valor, color: 'rgb(67, 67, 72)', radius: 10}";
        $skip = true;
    }

    $data4[] = $valor;
}


?>
        <!--Load the AJAX API-->
<script type="text/javascript" src="{{ asset('plugins/bootstrap/js/highcharts.js') }}"></script>
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

@section('title','Redes de Información')

@section('content')
    <div class="content shortcodes">
        <div class="layout">
            <div>
                <!-- Gráfico -->
                <div class="post-preview">
                    <!-- Post Gráfico -->
                    <div class="post-image-wrap">
                        <div id="container" style="width:100%; height:400px;background-color: #ccc"></div>
                    </div>
                    <!-- End Post Gráfico -->
                </div>
                <!-- End Gráfico -->

                <div class="b-promo">
                    <a href="suscribirse/" class="btn big colored">Suscribirse</a>
                    <h3>Reciba Alertas de Heladas de Cauquenes</h3>
                    Suscribase para recibir alertas de heladas, las alertas serán enviadas como un SMS a su celuar y/o vía email a su correo electrónico.
                </div>
            </div>

            <div class="row">
                <div class="row-item col-1_2">
                    <h3 class="lined margin-20">Histórico de Heladas</h3>
                    <!-- Table -->
                    <div class="b-table">
                        <table>
                            <thead>
                            <tr>
                                <td>
                                    <i class="icon-calendar"></i>Fecha
                                </td>
                                <td style="text-align: center;">
                                    <i class="icon-bar-chart"></i>Temperatura
                                </td>
                                <td style="text-align: center;">
                                    <i class="icon-time"></i>Duración en Horas
                                </td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    01-10-2015
                                </td>
                                <td style="text-align: center;">
                                    -1,2<sup>ºC</sup>
                                </td>
                                <td style="text-align: center;">
                                    3
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    01-10-2015
                                </td>
                                <td style="text-align: center;">
                                    -1,2<sup>ºC</sup>
                                </td>
                                <td style="text-align: center;">
                                    3
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    01-10-2015
                                </td>
                                <td style="text-align: center;">
                                    -1,2<sup>ºC</sup>
                                </td>
                                <td style="text-align: center;">
                                    3
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    01-10-2015
                                </td>
                                <td style="text-align: center;">
                                    -1,2<sup>ºC</sup>
                                </td>
                                <td style="text-align: center;">
                                    3
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    01-10-2015
                                </td>
                                <td style="text-align: center;">
                                    -1,2<sup>ºC</sup>
                                </td>
                                <td style="text-align: center;">
                                    3
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    01-10-2015
                                </td>
                                <td style="text-align: center;">
                                    -1,2<sup>ºC</sup>
                                </td>
                                <td style="text-align: center;">
                                    3
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    01-10-2015
                                </td>
                                <td style="text-align: center;">
                                    -1,2<sup>ºC</sup>
                                </td>
                                <td style="text-align: center;">
                                    3
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    01-10-2015
                                </td>
                                <td style="text-align: center;">
                                    -1,2<sup>ºC</sup>
                                </td>
                                <td style="text-align: center;">
                                    3
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    01-10-2015
                                </td>
                                <td style="text-align: center;">
                                    -1,2<sup>ºC</sup>
                                </td>
                                <td style="text-align: center;">
                                    3
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    01-10-2015
                                </td>
                                <td style="text-align: center;">
                                    -1,2<sup>ºC</sup>
                                </td>
                                <td style="text-align: center;">
                                    3
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    01-10-2015
                                </td>
                                <td style="text-align: center;">
                                    -1,2<sup>ºC</sup>
                                </td>
                                <td style="text-align: center;">
                                    3
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    01-10-2015
                                </td>
                                <td style="text-align: center;">
                                    -1,2<sup>ºC</sup>
                                </td>
                                <td style="text-align: center;">
                                    3
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    01-10-2015
                                </td>
                                <td style="text-align: center;">
                                    -1,2<sup>ºC</sup>
                                </td>
                                <td style="text-align: center;">
                                    3
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    01-10-2015
                                </td>
                                <td style="text-align: center;">
                                    -1,2<sup>ºC</sup>
                                </td>
                                <td style="text-align: center;">
                                    3
                                </td>
                            </tr>


                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="pagination">
                        <div>
                            Lista400do 1 de 4
                        </div>
                        <a href="#" class="active">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                    </div>
                    <!-- End Pagination -->

                    <!-- End Table -->
                </div>

                <div class="row-item col-1_2">
                    <h3 class="lined margin-20">Panorama Sinóptico para Hoy</h3>
                    <div class="post-preview">
                        <!-- Post Image -->
                        <div class="post-image-wrap">
                            <a href="#dsaf" class="post-image">
                                <img src="{{ asset('plugins/bootstrap/img/muestra.png') }}" alt="" height="600">
                                <div class="link-overlay icon-chevron-right"></div>
                            </a>
                        </div>
                        <!-- End Post Image -->
                    </div>
                </div>
            </div>


            <h3 class="lined margin-20">Estaciones Cercanas</h3>
            <!-- Table -->
            <div class="b-table">
                <table>
                    <thead>
                    <tr>
                        <td>
                            <i class="icon-map-marker"></i>Estación
                        </td>
                        <td>
                            <i class="icon-globe"></i>Comuna
                        </td>
                        <td style="text-align: center;">
                            <i class="icon-exchange"></i>Distancia
                        </td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <a href="#">Chanco</a>
                        </td>
                        <td>
                            Chanco
                        </td>
                        <td style="text-align: center;">
                            11 KM
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#">Sauzal</a>
                        </td>
                        <td>
                            Cauquenes
                        </td>
                        <td style="text-align: center;">
                            15 KM
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#">Los Despachos</a>
                        </td>
                        <td>
                            Cauquenes
                        </td>
                        <td style="text-align: center;">
                            21 KM
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <!-- End Table -->


        </div>
        <br><br>
    </div>
    <script type="text/javascript">

        Highcharts.setOptions({
            lang: {
                months: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                shortMonths: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
                weekdays: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado']
            }
        });

        var chart = new Highcharts.Chart({
            chart: {
                renderTo: 'container',
                plotBorderWidth: 1,
                marginLeft: 40,
            },
            plotOptions: {
                line: {
                    dataLabels: {
                        enabled: false
                    }
                }
            },

            title: {
                text: 'Meteograma para Estación Cauquenes, Cauquenes',
                align: 'left',
                x: 0,
                style: {
                    fontWeight: 'bold'
                }
            },
            subtitle: {
                text: 'Dato Observado hasta las 17:00 PM y Pronóstico Siguientes 12 Horas',
                align: 'left',
                x: 0
            },

            credits: {
                text: false,
            },

            tooltip: {
                shared: true,
                crosshairs: true,
                xDateFormat: '%A %d de %B %H:00 hrs.',
                useHTML: true,
                headerFormat: '<small>{point.key}</small><table>',
                pointFormat: '<tr><td>{series.name}: </td>' +
                '<td style="text-align: right"><b>{point.y}</b></td></tr>',
                footerFormat: '</table>',
            },

            xAxis: [
                {//bottom x axis
                    type: 'datetime',
                    tickInterval: 3600 * 1000,
                    gridLineWidth: 1,
                    lineWidth: 1,
                    labels: {
                        format: '{value:%H}'
                    },
                    plotBands: [{
                        color: '#FCFFC5',
                        from: 1377277200000,
                        to: 1377320400000
                    }]

                },
                { // top x axis
                    type: 'datetime',
                    linkedTo: 0,
                    opposite: true,
                    tickLength: 20,
                    tickInterval: 24 * 3600 * 1000,
                    gridLineWidth: 2,
                    labels: {
                        format: '{value:%A <span style="font-size: 12px; font-weight: bold">%e</span> de %B}',
                        x: 60,
                        y: -5
                    },

                }],

            yAxis: [
                {//temperatura
                    lineWidth: 1,
                    title: {
                        text: null
                    },
                    labels: {
                        format: '{value}°',
                        style: {
                            fontSize: '10px'
                        },
                        x: -3
                    },
                    tickAmount: 8,
                    plotLines: [{ // zero plane
                        value: 0,
                        color: '#BBBBBB',
                        width: 3,
                        zIndex: 2
                    }],
                },
                {//HR
                    lineWidth: 1,
                    //linkedTo: 0,
                    opposite: true,
                    title: {
                        text: null
                    },
                    labels: {
                        format: '{value}%',
                        style: {
                            fontSize: '10px'
                        },
                        x: 3
                    }

                }

            ],

            series: [{
                yAxis: 0,
                name: 'Temperatura',
                zIndex: 1,
                data: [<?php echo join($data1, ',') ?>],
                pointStart: Date.UTC(2013, 7, 23),
                pointInterval: 3600 * 1000,
                lineWidth: 2,
                zones: [{
                    value: 0,
                    color: '#FF0000'
                }],
                color: 'rgb(144, 237, 125)',
                dataLabels: {
                    enabled: true,
                    formatter: function () {
                        if (this.y <= 0) {
                            return this.y;
                        }
                    },
                    style: {
                        fontSize: '8px'
                    }
                },
                tooltip: {
                    valueSuffix: ' ºC'
                }
            },
                {
                    yAxis: 1,
                    name: 'Humedad Relativa',
                    type: 'column',
                    data: [<?php echo join($data2, ',') ?>],
                    pointStart: Date.UTC(2013, 7, 23),
                    pointInterval: 3600 * 1000,
                    tooltip: {
                        valueSuffix: ' %'
                    },
                    color: 'rgb(104, 207, 232)',
                    visible: false

                },
                {
                    name: 'Velocidad del Viento',
                    data: [<?php echo join($data3, ',') ?>],
                    pointStart: Date.UTC(2013, 7, 23),
                    pointInterval: 3600 * 1000,
                    tooltip: {
                        valueSuffix: ' km/h'
                    },
                    visible: false
                },
                {
                    name: 'Punto de Rocío',
                    data: [<?php echo join($data4, ',') ?>],
                    pointStart: Date.UTC(2013, 7, 23),
                    pointInterval: 3600 * 1000,
                    tooltip: {
                        valueSuffix: ' ºC'
                    },
                    visible: false
                }]

        });
    </script>
@endsection

