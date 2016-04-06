<?php
$SYS_NAME = 'PASTO';
$WWW_BASE = 'http://localhost/dev/pasto/html/';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="{{ $SYS_NAME}} es un simulador de crecimiento de praderas, desarrollado por INIA CRI Remehue para la X Región de los Lagos.">
    <meta name="author" content="Jorge Luis Gatica - about.me/jorgeluisgatica">
    <!--[if ie]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->

    <title>{{ $SYS_NAME}}| Usuario</title>
    <base href="{{ $WWW_BASE}}">
    <link rel="shortcut icon" href="favicon.ico">
    
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/prettyPhoto.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap/css/settings.css') }}" media="screen"/>
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/color-scheme/blue.css') }}">
    
    <!-- Base JS -->
    <script src="{{ asset('plugins/bootstrap/js/jquery-1.9.1.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/main.js') }}"></script>
    
    <!-- Revolution Slider -->
    <script src="{{ asset('plugins/bootstrap/js/jquery.themepunch.plugins.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/revolution-slider-options.js') }}"></script>    
    
    <!-- Prety photo -->
    <script src="js/jquery.prettyPhoto.js"></script>

    <!-- Google Maps -->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>

    <script>
        $(document).ready(function(){
            $("a[rel^='prettyPhoto']").prettyPhoto();

            $("#nuevopredio").click(function() {
                initialize();
            }); 
        });

        function initialize() {
            var mapOptions = {
              center: new google.maps.LatLng(-41.02965517633313, -73.10300234374995),
              zoom: 8,
              mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map         = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);

            setTimeout(function () {
                google.maps.event.trigger(map, 'resize');
            },
            100);
        }
    </script>
</head>

<body class="bg-shattered" onload="initialize()">

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
    <div class="content shortcodes">
        <div class="layout">

            <div class="title">
                <h3 class="lined">¡ Bienvenido @if(Auth::user()){{ Auth::user()->name }}@endif !</h3>
            </div>

            <!-- Vertical Tabs -->
            <div class="b-tabs m-nav-left">
                <!-- Tabs Navigation -->
                <ul class="tabs-nav">
                    <li class="active" id="nuevopredio"><span><i class="icon-bookmark-empty"></i>Mis Suscripciones</span></li>
                    <li class=""><span><i class="icon-pushpin m-dark"></i>Mis Usuarios</span></li>
                    <li class=""><span><i class="icon-user"></i>Perfil</span></li>
                </ul>
                <!-- End Tabs Navigation -->
                <!-- Tabs Content -->
                <div class="tabs-content">

                    <div class="tab active">
                        <div class="row">
                            <div class="row-item col-1_3">
                                <form class="b-form m-perfil-form" action="" method="post" style="margin-bottom: 10px;">
                                    <div class="input-wrap">
                                        <i class="icon-pushpin m-dark"></i>
                                        <input class="field-predioname" type="text" placeholder="nombre predio (obligatorio)">
                                    </div>
                                    
                                    <div class="input-wrap">
                                        <i class="icon-map-marker"></i>
                                        <input class="field-latitud" type="text" placeholder="latitud: seleccione un punto en el mapa" readonly>
                                    </div>
                                    <div class="input-wrap">
                                        <i class="icon-map-marker"></i>
                                        <input class="field-longitud" type="text" placeholder="longitud: seleccione un punto en el mapa" readonly>
                                    </div>  
                                    <input class="btn-submit btn colored" type="submit" value="Guardar Predio">
                                </form>
                            </div>

                            <div class="row-item col-1_2predios">

                                <div class="b-google-map">
                                    <div id="map_canvas" class="full-shadow" style="width: 100%; height: 400px;"> 
                                        <p>cargando ...</p>
                                    </div>
                                </div>
                                <div class="gap" style="height: 30px;"></div>

                            </div>
                        </div>
                    </div>

                    <div class="tab">
                        @include('admin.personas.index')
                    </div>

                    <div  class="tab">
                        <form class="b-form b-perfil-form" action="contact.php" style="margin-bottom: 10px;">
                            <div class="input-wrap">
                                <i class="icon-user"></i>
                                <input class="field-name" type="text" placeholder="Nombre (requerido)" value="Rodrigo">
                            </div>
                            <div class="input-wrap">
                                <i class="icon-user"></i>
                                <input class="field-name" type="text" placeholder="Apellido (requerido)" value="Bravo">
                            </div>
                            <div class="input-wrap">
                                <i class="icon-envelope"></i>
                                <input class="field-email" type="text" placeholder="Email (opcional)" value=rbravo@inia.cl>
                            </div>
                            <div class="input-wrap">
                                <i class="icon-pencil"></i>
                                <input class="field-subject" type="text" disabled value="10.864.741-8">
                            </div>
                            <div class="select-wrap">
                                <i class="icon-suitcase"></i>
                                <select>
                                    <option value="" disabled >Ocupación (requerido)</option>
                                    <option value="1">Agricultor</option>
                                    <option value="2" selected>Investigador</option>
                                    <option value="3">Estudiante</option>
                                    <option value="4">Asesor Técnico</option>
                                    <option value="10">Otro</option>
                                </select>
                            </div>
                            <div class="input-wrap">
                                <i class="icon-briefcase"></i>
                                <input class="field-empresa" type="text" placeholder="Empresa (opcional)" value="INIA">
                            </div>
                            <div class="input-wrap">
                                <i class="icon-key"></i>
                                <input class="field-key" type="password" placeholder="Constraseña (requerido)" value="11111">
                            </div>
                            <div class="input-wrap">
                                <i class="icon-key"></i>
                                <input class="field-key" type="password" placeholder="Repita Contraseña (requerido)" value="11111">
                            </div>
                            <input class="btn-submit btn colored" type="submit" value="Guardar Cambios">
                        </form>
                    </div>
                </div>
                <!-- End Tabs Content -->
            </div>
            <!-- End Vertical Tabs -->
                
            
        </div>
    </div>


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