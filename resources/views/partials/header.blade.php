<div class="header">
    <div class="layout clearfix">
        <div class="mob-layout wrap-left">
            <!-- Logo -->
            <div class="logo">
                <a href="inicio/" class="logo-ministerio"><img src="{{ asset('plugins/bootstrap/img/logo_ministerio.png') }}" alt=""></a>
            </div>
            <!-- Mobile Navigation Button -->
            <div class="btn-menu icon-reorder"></div>
            <!-- Navigation -->
            <ul class="menu">
                <!-- Item 1 -->
                <li>
                    <a href="{{ route('home')}}" class="{{ route::is('home') ? 'active' : '' }}">EL PROYECTO</a>

                    <ul class="submenu">
                        <li><a href="{{ route('home')}}">Información</a></li>
                        <li><a href="ingresar/">Ingresar</a></li>
                        <li><a href="registrarse/">Registrarse</a></li>
                    </ul>
                </li>

                <!-- Item 2 -->
                <li>
                    <a href="{{ route('monitoreo')}}" class="{{ route::is('monitoreo','detalle_estacion','welcome') ? 'active' : '' }}">MONITOREO DE HELADAS</a>
                </li>

                <!-- Item 3 -->
                <li>
                    <a href="{{ route('evaluacion')}}" class="{{ route::is('evaluacion') ? 'active' : '' }}">EVALUACIÓN DE IMPACTO</a>
                </li>

                <!-- Item 4 -->
                <li>
                    <a href="{{ route('redes_informacion')}}" class="{{ route::is('redes_informacion') ? 'active' : '' }}">REDES DE INFORMACIÓN</a>
                </li>

                <!-- Item 5 -->
            </ul>
        </div>

    </div>
    <!-- Mobile Navigation -->
    <ul class="mob-menu">
        <!-- Item 1 -->
        <li>
            <div>
                <a href="{{ route('home')}}">El Proyecto</a>
                <span class="btn-submenu"></span>
            </div>

            <ul class="mob-submenu">
                <li>
                    <div><a href="{{ route('home')}}">Información</a></div>
                </li>
                <li>
                    <div><a href="ingresar/">Ingresar</a></div>
                </li>
                <li>
                    <div><a href="registrarse/">Registrarse</a></div>
                </li>
            </ul>
        </li>
        <!-- End Item 1 -->
        <!-- Item 2 -->
        <li>
            <div>
                <a href="{{ route('monitoreo')}}" class="{{ route::is('monitoreo','detalle_estacion','welcome') ? 'active' : '' }}">MONITOREO DE HELADAS</a>
            </div>
        </li>
        <!-- End Item 2 -->
        <!-- Item 3 -->
        <li>
            <div>
                <a href="{{ route('evaluacion')}}" class="{{ route::is('evaluacion') ? 'active' : '' }}">EVALUACIÓN DE IMPACTO</a>
            </div>
        </li>
        <!-- Item 4 -->
        <li>
            <div>
                <a href="{{ route('redes_informacion')}}" class="{{ route::is('redes_informacion') ? 'active' : '' }}">HELADAS REPORTADAS</a>
            </div>
        </li>

    </ul>
    <!-- End Mobile Navigation -->
</div>