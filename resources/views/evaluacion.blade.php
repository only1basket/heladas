@extends('main')

@section('title','Evaluación de Impacto')

@section('content')
    <div class="content">
        <div class="layout">
            <div class="row">
                <div class="row-item col-1_2">
                    <div class="title">
                        <h4 class="lined">VCI 15-02-2016</h4>
                    </div>

                    <img src="{{ asset('plugins/bootstrap/img/img-41.jpg') }}" alt="">

                    <div class="gap" style="height: 30px;"></div>
                </div>
                <div class="row-item col-1_2">
                    <div class="title">
                        <h4 class="lined">Índice de Condición de la Vegetación</h4>
                    </div>

                    <p style="text-align: justify;">El índice de la condición de la vegetación (VCI) compara el NDVI actual para el rango de valores observados en el mismo periodo de años anteriores. </p>
                    <p style="text-align: justify;">El VCI se expresa en % y da una idea de donde el valor observado se sitúa entre los valores extremos (mínimo y máximo) en los años anteriores. </p>
                    <p style="text-align: justify;">Los valores más bajos y más altos indican condiciones malas y buenas estatales vegetación, respectivamente.</p>
                    <p style="text-align: justify;">Dado que el VCI es un producto derivado de NDVI, su calidad depende totalmente de la calidad de la NDVI y la longitud de la serie de tiempo histórica disponible. En particular, es sensible a la nube de contaminación en el conjunto de datos NDVI originales. Esto puede dar lugar a un valor normal por debajo del cual no se debe a la actividad de la vegetación baja. Debido a esto, es importante tener en cuenta dekades sucesivas para ver si la tendencia en el área considerada persiste.</p>
                    <div class="gap" style="height: 30px;"></div>
                </div>
            </div>
            <div class="row">
                <div class="row-item col-1_4">
                    <h4 class="margin-20">VCI 01-02-2016</h4>
                    <!-- Image -->
                    <div class="img-wrap">
                        <img src="{{ asset('plugins/bootstrap/img/elements/img-1.jpg') }}" alt="" class="m-center">
                    </div>
                    <!-- End Image -->
                </div>
                <div class="row-item col-1_4">
                    <h4 class="margin-20">VCI 15-01-2016</h4>
                    <!-- Image -->
                    <div class="img-wrap">
                        <img src="{{ asset('plugins/bootstrap/img/elements/img-1.jpg') }}" alt="" class="m-center">
                    </div>
                    <!-- End Image -->
                </div>
                <div class="row-item col-1_4">
                    <h4 class="margin-20">VCI 01-01-2016</h4>
                    <!-- Image -->
                    <div class="img-wrap">
                        <img src="{{ asset('plugins/bootstrap/img/elements/img-1.jpg') }}" alt="" class="m-center">
                    </div>
                    <!-- End Image -->
                </div>
                <div class="row-item col-1_4">
                    <h4 class="margin-20">VCI 31-12-2015</h4>
                    <!-- Image -->
                    <div class="img-wrap">
                        <img src="{{ asset('plugins/bootstrap/img/elements/img-1.jpg') }}" alt="" class="m-center">
                    </div>
                    <!-- End Image -->
                </div>

            </div>
        </div>
    </div>
@endsection